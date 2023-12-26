@extends('layouts.template_dashboard_admin')

@section('judul','EMAMI - Menambahkan Produk')

@section('isi')
<h2>Update Produk</h2>

    <form action="{{ route('produk.update', $produk->kode_produk) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" required><br>

        <label for="harga_produk">Harga Produk:</label>
        <input type="text" name="harga_produk" value="{{ $produk->harga_produk }}" required><br>

        <label for="produk_terjual">Produk Terjual:</label>
        <input type="text" name="produk_terjual" value="{{ $produk->produk_terjual }}" required><br>

        <label for="deskripsi_produk">Deskripsi:</label>
        <textarea name="deskripsi_produk" required>{{ $produk->deskripsi_produk }}</textarea><br>

        <label for="stok_produk">stok Produk:</label>
        <input type="text" name="stok_produk" value="{{ $produk->stok_produk }}" required><br>

        <label for="kategori_produk">Kategori Produk:</label>
        <select name="kategori_produk" required>
            <option value="makanan_ringan" {{ $produk->kategori_produk == 'makanan_ringan' ? 'selected' : '' }}>Makanan Ringan</option>
            <option value="makanan_berat" {{ $produk->kategori_produk == 'makanan_berat' ? 'selected' : '' }}>Makanan Berat</option>
            <option value="minuman" {{ $produk->kategori_produk == 'minuman' ? 'selected' : '' }}>Minuman</option>
            <option value="pakaian_pria" {{ $produk->kategori_produk == 'pakaian_pria' ? 'selected' : '' }}>Pakaian Pria</option>
            <option value="pakaian_wanita" {{ $produk->kategori_produk == 'pakaian_wanita' ? 'selected' : '' }}>Pakaian Wanita</option>
            <option value="aksesoris_pria" {{ $produk->kategori_produk == 'aksesoris_pria' ? 'selected' : '' }}>Aksesoris Pria</option>
            <option value="aksesoris_wanita" {{ $produk->kategori_produk == 'aksesoris_wanita' ? 'selected' : '' }}>Aksesoris Wanita</option>
            <option value="lainnya" {{ $produk->kategori_produk == 'lainnya' ? 'selected' : '' }}>Lainnya</option>

        </select><br>

        <label for="gambar_produk">Gambar Produk:</label>
        <input type="file" name="gambar_produk"><br>

        <input type="submit" name="submit" value="Update Produk">
        <input type="reset" name="reset" value="Bersihkan">
    </form>

@endsection