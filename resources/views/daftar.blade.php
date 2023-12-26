@extends('layouts.template_index')

@section('judul','EMAMI - Daftar')

@section('isi')
<!-- form masuk -->
<div class="form-masuk" style="top: 150px;">
    <div class="masuk">
        <h3>Daftar</h3>
    </div>

    @if($errors->any())
        <div class="alert alert danger">
            <ul>
                @foreach($errors->all() as $item)
                    <li> {{ $item }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ url('/daftar/create') }}">
        @csrf
        <div class="form-input">
            <h5>Nama Lengkap</h5>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ Session::get('nama_lengkap') }}" placeholder="Nama Lengkap">
        </div>
        <div class="form-input">
            <h5>Username</h5>
            <input type="text" id="username" name="username" value="{{ Session::get('username') }}" placeholder="Username">
        </div>
        <div class="form-input">
            <h5>Password</h5>
            <input type="password" id="password" name="password" placeholder="Password" >
        </div>
        <div class="form-input">
            <h5>Nomor Telepon</h5>
            <input type="text" id="nomor_telepon" name="nomor_telepon"  placeholder="Nomor Telepon">
        </div>
        <div class="form-input">
            <h5>Alamat</h5>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat">
        </div>
        <button type="submit" name="login" class="button-login font-weight-bold">Daftar</button>
        <button type="reset" class="button-reset font-weight-bold">Batal</button>
    </form>        

</div>
@endsection