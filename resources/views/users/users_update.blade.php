@extends('layouts.template_dashboard')

@section('judul','EMAMI - Dashboard Penjual')

@section('isi')
    <div class="container">
        <h2>Edit User</h2>

        <form method="POST" action="{{ route('users.updateProfile', $user->user_id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="{{ $user->username }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" value="{{ $user->nomor_telepon }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control">{{ $user->alamat }}</textarea>
            </div>

            <div class="form-group">
                <label for="password">Password Baru:</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password Baru:</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
