@extends('layouts.template_dashboard')

@section('judul','EMAMI - Menambahkan Produk')

@section('isi')
<link rel="stylesheet" href="{{ asset('assets/css/styles_dashboard.css') }}">

<h2>Tambah Produk Baru</h2>

<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" required><br>

        <label for="harga_produk">Harga Produk:</label>
        <input type="text" name="harga_produk" required><br>

        <label for="produk_terjual">Produk Terjual:</label>
        <input type="text" name="produk_terjual" required><br>

        <label for="deskripsi_produk">Deskripsi:</label>
        <textarea name="deskripsi_produk" required></textarea><br>

        <label for="stok_produk">stok Produk:</label>
        <input type="text" name="stok_produk" required><br>

        <label for="kategori_produk">Kategori Produk:</label>
        <select name="kategori_produk" required>
            <option>--- Pilih ---</option>
            <option value="makanan_ringan">Makanan Ringan</option>
            <option value="makanan_berat">Makanan Berat</option>
            <option value="minuman">Minuman</option>
            <option value="pakaian_pria">Pakaian Pria</option>
            <option value="pakaian_wanita">Pakaian Wanita</option>
            <option value="aksesoris_pria">Aksesoris Pria</option>
            <option value="aksesoris_wanita">Aksesoris Wanita</option>
            <option value="lainnya">Lainnya</option>
        </select><br>

        <label for="gambar_produk">Gambar Produk:</label>
        <input type="file" name="gambar_produk" required><br>

        <input type="submit" name="submit" value="Tambah Produk">
        <input type="reset" name="reset" value="Bersihkan">
    </form>

    <a href="{{ route('produk.index') }}">Kembali</a>
@endsection