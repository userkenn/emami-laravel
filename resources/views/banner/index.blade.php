@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Admin')

@section('isi')

<h1>Mengelola Banner</h1> <br>

<a href="{{ route('banner.create') }}"><button class="tombol-tambah">Tambah Data</button></a>

<table>
    <thead>
        <tr>
            <th>Gambar Banner</th>
            <th>Nama Banner</th>
            <th>Deskripsi Banner</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($banners as $key => $banner)
            @if($key % 3 == 0)
                </tr><tr>
            @endif
            <td>
                @if ($banner->gambar_banner)
                    <img src="{{ asset('assets/img/slide/' . $banner->gambar_banner) }}" width="100" alt="Gambar Banner">
                @else
                    No Image
                @endif
            </td>
            <td>{{ $banner->nama_banner }}</td>
            <td>{{ $banner->deskripsi }}</td>
            <td>
                <a href="{{ route('banner.editBanner', $banner->id) }}">
                    <img src="{{ asset('assets/img/penjual/edit.png') }}" alt="Edit">
                </a> |
                
                
            </td>
        @endforeach
    </tbody>
</table>

@endsection
