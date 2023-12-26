@extends('layouts.template_index')

@section('judul','EMAMI - Masuk')

@section('isi')
<!-- form masuk -->
<div class="form-masuk" style="top: 150px;">
    <div class="masuk">
        <h3>MASUK</h3>
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
    <form method="POST" action="/masuk/login">
        @csrf
        <div class="form-input">
            <h5>Username</h5>
            <input type="text" id="username" name="username" value="{{ Session::get('username') }}" placeholder="Username">
        </div>
        <div class="form-input">
            <h5>Password</h5>
            <input type="password" id="password" name="password" placeholder="Password" >
        </div>
        <button type="submit" name="login" class="button-login font-weight-bold">Masuk</button>
        <button type="reset" class="button-reset font-weight-bold">Batal</button>
    </form>        

</div>
@endsection