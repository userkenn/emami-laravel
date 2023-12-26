<?php

namespace App\Http\Controllers;

use App\Charts\PenjualanChart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PenjualController extends Controller
{
    function indexPenjual(PenjualanChart $chart) {
        $user = Auth::user();
        return view("dashboard_penjual", compact('user'), ['chart' => $chart->build()]);
    }


    // PROFILE PENJUAL
    public function indexProfil()
    {
        $user = Auth::user();
        return view('users.index', compact('user'));
    }
    

    public function editProfil($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('users.users_update', compact('user'));
    }

    public function updateProfil(Request $request, $user_id)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string',
            'nama_lengkap' => 'required|string',
            'nomor_telepon' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'nullable|min:3',
        ], [
            'password.min' => 'Minimum Password 3 Karakter',
        ]);

        $data = [
            'username' => $request->input('username'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'alamat' => $request->input('alamat'),
        ];

        // Update password if there is a new password input
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        $user->update($data);
        return redirect()->route('users.indexProfile')->with('success', 'User updated successfully');
    }


    // PRODUK PENJUAL
    public function indexProduk()
    {
        // Dapatkan produk untuk pengguna yang sudah login
        $produk = Auth::user()->produk;
        $user = Auth::user();

        return view('produk.index', compact('produk','user'));
    }

    public function createProduk()
    {
        return view('produk.produk_create');
    }

    public function storeProduk(StoreProdukRequest $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'produk_terjual' => 'required|numeric',
            'deskripsi_produk' => 'string',
            'stok_produk' => 'required|numeric',
            'kategori_produk' => 'required|string',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->gambar_produk->extension();
        $request->gambar_produk->move(public_path('assets/img/gambar_produk'), $imageName);

        $user->produk()->create([
            'nama_produk' => $request->input('nama_produk'),
            'harga_produk' => $request->input('harga_produk'),
            'produk_terjual' => $request->input('produk_terjual'),
            'deskripsi_produk' => $request->input('deskripsi_produk'),
            'stok_produk' => $request->input('stok_produk'),
            'kategori_produk' => $request->input('kategori_produk'),
            'gambar_produk' => $imageName,
        ]);

        return redirect()->route('produk.index')->with('message', 'Produk berhasil ditambahkan');
    }

    public function editProduk(Produk $produk)
    {
        $user = Auth::user();
        $this->authorize('update', $produk);

        return view('produk.produk_update', compact('produk'));
    }

    public function updateProduk(UpdateProdukRequest $request, Produk $produk)
    {
        $this->authorize('update', $produk);

        $request->validate([
            'nama_produk' => 'required|string',
            'harga_produk' => 'required|numeric',
            'produk_terjual' => 'required|numeric',
            'deskripsi_produk' => 'string',
            'stok_produk' => 'required|numeric',
            'kategori_produk' => 'required|string',
            'gambar_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar_produk')) {
            $this->deleteOldImage($produk);

            $imageName = time().'.'.$request->gambar_produk->extension();
            $request->gambar_produk->move(public_path('assets/img/gambar_produk'), $imageName);

            $produk->update([
                'nama_produk' => $request->input('nama_produk'),
                'harga_produk' => $request->input('harga_produk'),
                'produk_terjual' => $request->input('produk_terjual'),
                'deskripsi_produk' => $request->input('deskripsi_produk'),
                'stok_produk' => $request->input('stok_produk'),
                'kategori_produk' => $request->input('kategori_produk'),
                'gambar_produk' => $imageName,
            ]);
        } else {
            $produk->update($request->only(['nama_produk', 'harga_produk', 'produk_terjual', 'deskripsi_produk', 'stok_produk', 'kategori_produk']));
        }

        return redirect()->route('produk.index')->with('message', 'Produk berhasil diperbarui');
    }

    public function destroyProduk(Produk $produk)
    {
        $this->authorize('delete', $produk);

        $this->deleteOldImage($produk);

        $produk->delete();

        return redirect()->route('produk.index')->with('message', 'Produk berhasil dihapus');
    }

    private function deleteOldImage(Produk $produk)
    {
        if ($produk->gambar_produk) {
            $gambarLamaPath = public_path('assets/img/gambar_produk/') . $produk->gambar_produk;
            if (file_exists($gambarLamaPath)) {
                unlink($gambarLamaPath);
            }
        }
    }

    // APALAGI
}
