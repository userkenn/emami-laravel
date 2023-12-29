<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produk = Produk::orderByDesc('klik')->get();
        $products = Produk::orderByDesc('produk_terjual', 'desc')->get();
        return view("home", compact('produk', 'products'));
    }

    public function jumlahKlik(Request $request, $id){
        $update = Produk::where('kode_produk', $id)->first();
        $update->update([
            'klik' => $update->klik + 1
        ]);
    }

}
