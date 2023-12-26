<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index()
    {
        return view('masuk');
    }

    function login(Request $request)
    {
        Session::flash('username', $request->username);
        $request->validate([
            'username'=> 'required',
            'password'=> 'required',
        ], [
            'username.required'=> 'Username Wajib diisi',
            'password.required'=> 'Password Wajib diisi',
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');

            }elseif(Auth::user()->role == 'penjual'){
                return redirect('/penjual');

            }elseif(Auth::user()->role == 'pengunjung'){
                return redirect('/pengunjung');
            }
        }else{
            return redirect('/masuk')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function register(){
        return view('daftar');
    }

    function create(Request $request)
    {
        Session::flash('nama_lengkap', $request->nama_lengkap);
        Session::flash('username', $request->username);
        $request->validate([
            'username'=> 'required|unique:users',
            'password'=> 'required|min:3',
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
        ], [
            'username.required'=> 'Username Wajib diisi',
            'username.unique' => 'Username sudah digunakan, silahkan masukkan Username lain',
            'password.required'=> 'Password Wajib diisi',
            'password.min' => 'Minimum Password 3 Karakter',
            'nama_lengkap.required' => 'Nama Lengkap Wajib diisi',
            'nomor_telepon' => 'Nomor Telepon Wajib diisi',
            'alamat' => 'Alamat Telepon Wajib diisi',
        ]);

        $data = [
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'nama_lengkap'=> $request->nama_lengkap,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
        ];
        User::create($data);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('pengunjung')->with('Success', Auth::user()->name . 'Berhasil Mendaftar Silahkan Masuk');
        }else{
            return redirect('daftar')->withErrors('Username dan Password yang dimasukkan tidak valid');
        }
    }
}
