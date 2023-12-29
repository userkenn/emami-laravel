@extends('layouts.template_dashboard_admin')

@section('judul','EMAMI - Menambahkan Produk')

@section('isi')

    <h1>Tambah Banner</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="gambar_banner">Gambar Banner:</label>
        <input type="file" name="gambar_banner" required>
    
        <label for="nama_banner">Nama Banner:</label>
        <input type="text" name="nama_banner" required>
    
        <label for="deskripsi_banner">Deskripsi Banner:</label>
        <textarea name="deskripsi_banner"></textarea>
    
        <input type="submit" name="submit" value="Tambah Produk">
    </form>
    

@endsection