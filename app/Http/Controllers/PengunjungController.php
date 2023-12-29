<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengunjungController extends Controller
{
    function indexPengunjung() {       
        $produk = Produk::orderByDesc('klik')->get();
        $products = Produk::orderByDesc('produk_terjual', 'desc')->get();   
        return view("pengunjung.pengunjung", compact('produk','products'));
    }

    public function jumlahKlik(Request $request, $id){
        $update = Produk::where('kode_produk', $id)->first();
        $update->update([
            'klik' => $update->klik + 1
        ]);
    }

    public function makananRingan(){
        $makananRinganProduk = Produk::where('kategori_produk', 'makanan_ringan')->get();
        return view('pengunjung.makanan_ringan', ['makananRinganProduk' => $makananRinganProduk]);
    }

    public function makananBerat(){
        $makananBeratProduk = Produk::where('kategori_produk', 'makanan_berat')->get();
        return view('pengunjung.makanan_berat', ['makananBeratProduk' => $makananBeratProduk]);
    }

    public function Minuman(){
        $minumanProduk = Produk::where('kategori_produk', 'minuman')->get();
        return view('pengunjung.minuman', ['minumanProduk' => $minumanProduk]);
    }

    public function pakaianPria(){
        $pakaianPriaProduk = Produk::where('kategori_produk', 'pakaian_pria')->get();
        return view('pengunjung.pakaian_pria', ['pakaianPriaProduk' => $pakaianPriaProduk]);
    }

    public function pakaianWanita(){
        $pakaianWanitaProduk = Produk::where('kategori_produk', 'pakaian_wanita')->get();
        return view('pengunjung.pakaian_wanita', ['pakaianWanitaProduk' => $pakaianWanitaProduk]);
    }
    public function aksesorisPria(){
        $aksesorisPriaProduk = Produk::where('kategori_produk', 'aksesoris_pria')->get();
        return view('pengunjung.aksesoris_pria', ['aksesorisPriaProduk' => $aksesorisPriaProduk]);
    }

    public function aksesorisWanita(){
        $aksesorisWanitaProduk = Produk::where('kategori_produk', 'aksesoris_wanita')->get();
        return view('pengunjung.aksesoris_wanita', ['aksesorisWanitaProduk' => $aksesorisWanitaProduk]);
    }

    public function Lainnya(){
        $lainnyaProduk = Produk::where('kategori_produk', 'lainnya')->get();
        return view('pengunjung.lainnya', ['lainnyaProduk' => $lainnyaProduk]);
    }
}
