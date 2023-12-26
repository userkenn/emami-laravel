<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProdukController extends Controller
{
    public function index()
    {
        // Dapatkan produk untuk pengguna yang sudah login
        $produk = Auth::user()->produk;
        $user = Auth::user();

        return view('produk.index', compact('produk','user'));
    }

    public function create()
    {
        return view('produk.produk_create');
    }

    public function store(StoreProdukRequest $request)
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

    public function edit(Produk $produk)
    {
        $user = Auth::user();
        $this->authorize('update', $produk);

        return view('produk.produk_update', compact('produk'));
    }

    public function update(UpdateProdukRequest $request, Produk $produk)
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

    public function destroy(Produk $produk)
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

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
