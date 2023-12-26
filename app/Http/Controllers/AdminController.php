<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

use App\Models\Banner;


class AdminController extends Controller
{
    function indexAdmin() {
        $user = Auth::user();
        return view("dashboard_admin", compact('user'));
    }

    function pengunjung() {
        $products = Produk::all();
        return view("pengunjung", compact('products'));
    }


    // PROFIL ADMIN
    public function indexProfil()
    {
        $user = Auth::user();
        return view('users.admin.index', compact('user'));
    }
    

    public function editProfil($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('users.admin.users_update', compact('user'));
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
        return redirect()->route('users.indexProfil')->with('success', 'User updated successfully');
    }

    // MENGELOLA PRODUK
    public function tampilUsers()
    {
        $users = User::where('role', 'penjual')->get();
        return view('produk.admin.index', ['users' => $users]);
    }

    public function lihatProduk($user_id)
    {
        $user = User::findOrFail($user_id);
        $produk = $user->produk;

        return view('produk.admin.produk_index', ['user' => $user, 'produk' => $produk]);
    }

    public function editProduk($kode_produk)
    {
        $produk = Produk::findOrFail($kode_produk);
        return view('produk.admin.produk_update', compact('produk'));
    }

    public function updateProduk(Request $request, $kode_produk)
    {
        $produk = Produk::findOrFail($kode_produk);

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

        return redirect()->route('produk.lihatProduk', ['user_id' => $produk->user_id])->with('message', 'Produk berhasil diperbarui');
    }

    public function destroyProduk($kode_produk)
    {
        $produk = Produk::findOrFail($kode_produk);
        $user_id = $produk->user_id;

        $this->deleteOldImage($produk);

        $produk->delete();

        return redirect()->route('produk.lihatProduk', ['user_id' => $user_id])->with('message', 'Produk berhasil dihapus');
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

    // MENGELOLA USER
    public function indexUsers()
    {
        $currentUser = Auth::user();
        $users = User::where('user_id', '!=', $currentUser->user_id)->get();

        return view('users.admin.mengelola_index', ['users' => $users]);
    }

    public function createUsers()
    {
        return view('users.admin.mengelola_create');
    }

    public function storeUsers(Request $request)
    {
        Session::flash('nama_lengkap', $request->nama_lengkap);
        Session::flash('username', $request->username);

        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:3',
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'role' => 'required|in:pengunjung,penjual,admin',
        ], [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah digunakan, silahkan masukkan username lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password 3 karakter',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
        ]);

        $data = [
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ];

        User::create($data);

        return redirect()->route('users.indexUsers');
    }

    public function editUsers($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('users.admin.mengelola_update', ['user' => $user]);
    }

    public function updateUsers(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $request->validate([
            'username' => 'required|string',
            'nama_lengkap' => 'required|string',
            'nomor_telepon' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'nullable|min:3',
            'role' => 'required|in:pengunjung,penjual,admin',
        ], [
            'password.min' => 'Minimum Password 3 Karakter',
        ]);

        $data = [
            'username' => $request->input('username'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'alamat' => $request->input('alamat'),
            'role' => $request->role,
        ];

        // Update password if there is a new password input
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->input('password'));
        }

        $user->update($data);
        return redirect()->route('users.indexUsers')->with('success', 'User updated successfully');
    }


    public function destroyUsers($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();

        Session::flash('success', 'User deleted successfully.');
        return redirect()->route('users.indexUsers');
    }

    // MENGELOLA BANNER
    public function indexBanner()
    {
        $banners = Banner::all();
        return view('banner.index', compact('banners'));
    }

    
}
