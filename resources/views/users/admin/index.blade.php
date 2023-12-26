@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Admin')

@section('isi')

    
    <h1>User Details</h1>

        @if($user)
            <table>
                <tbody>
                    <tr>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>{{ $user->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $user->nomor_telepon }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $user->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Sebagai</th>
                        <td>{{ $user->role }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('users.editProfil', $user->user_id) }}" class="edit-button">Edit</a>

        @else
            <p>No user is currently logged in.</p>
        @endif

    

@endsection
