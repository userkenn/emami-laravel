@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Penjual')

@section('isi')
    <h1>Mengelola Produk</h1>

    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->nama_lengkap }}</td>
                    <td>{{ $user->nomor_telepon }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td><a href="{{ route('produk.lihatProduk', ['user_id' => $user->user_id]) }}">Lihat Produk</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
