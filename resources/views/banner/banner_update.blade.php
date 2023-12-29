@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Mengedit Banner')

@section('isi')
    <h1>Edit Banner</h1>

    <form action="{{ route('banner.updateBanner', ['banner_id' => $banner->id]) }}" method="post">
        @csrf
        @method('put')

        <label for="gambar_produk">Gambar Banner:</label>
        <input type="file" name="gambar_banner"><br>

        <label for="nama_banner">Nama Banner:</label>
        <input type="text" name="nama_banner" value="{{ old('nama_banner', $banner->nama_banner) }}" required>

        <label for="deskripsi_banner">Deskripsi Banner:</label>
        <textarea name="deskripsi_banner">{{ old('deskripsi_banner', $banner->deskripsi_banner) }}</textarea>

        <input type="submit" name="submit" value="Update Banner">
    </form>
@endsection