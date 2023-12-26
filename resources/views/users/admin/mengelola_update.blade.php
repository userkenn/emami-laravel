@extends('layouts.template_dashboard_admin')

@section('judul', 'EMAMI - Dashboard Admin')

@section('isi')
    <!-- form edit akun -->
    <div class="masuk">
        <h3>Edit Akun</h3>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.updateUsers', $user->user_id) }}">
        @csrf
        @method('PUT')

        <div class="form-input">
            <h5>Nama Lengkap</h5>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}" placeholder="Nama Lengkap">
        </div>
        <div class="form-input">
            <h5>Username</h5>
            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" placeholder="Username">
        </div>
        <div class="form-input">
            <h5>Nomor Telepon</h5>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $user->nomor_telepon) }}" placeholder="Nomor Telepon">
        </div>
        <div class="form-input">
            <h5>Alamat</h5>
            <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat) }}" placeholder="Alamat">
        </div>
        <div class="form-input">
            <h5>Password Baru</h5>
            <input type="password" id="password" name="password" placeholder="Password Baru">
        </div>
        <div class="form-input">
            <h5>Verifikasi Password Baru</h5>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Verifikasi Password Baru">
        </div>
        <div class="form-input">
            <h5>Role:</h5>
            <select name="role">
                <option value="pengunjung" {{ old('role', $user->role) == 'pengunjung' ? 'selected' : '' }}>Pengunjung</option>
                <option value="penjual" {{ old('role', $user->role) == 'penjual' ? 'selected' : '' }}>Penjual</option>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <button type="submit" class="button-login font-weight-bold">Update</button>
        <button type="reset" class="button-reset font-weight-bold">Batal</button>
    </form>
@endsection
