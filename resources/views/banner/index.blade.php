@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Admin')

@section('isi')

<h1>Mengelola Banner</h1> <br>

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
                <a href="{{ route('', $banner->id) }}">
                    <img src="{{ asset('assets/img/penjual/edit.png') }}" alt="Edit">
                </a> |
                
                <a href="#" onclick="confirmDelete('{{ route('', $banner) }}')">
                    <img src="{{ asset('assets/img/penjual/delete.png') }}" alt="Hapus">
                </a>
            </td>
        @endforeach
    </tbody>
</table>

@endsection
