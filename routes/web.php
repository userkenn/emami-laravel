<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\HomeController;    
use App\Http\Controllers\PenjualController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('index');

Route::middleware(['guest'])->group(function () {
    Route::get('/masuk', [SesiController::class,'index'])->name('login');
    Route::post('/masuk/login', [SesiController::class,'login']);
    Route::get('/daftar', [SesiController::class,'register']);
    Route::post('/daftar/create', [SesiController::class,'create']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

Route::middleware(['userAkses:penjual', 'auth'])->group(function () {
    Route::get('/penjual', [PenjualController::class,'indexPenjual']);

    Route::get('/penjual/users', [PenjualController::class, 'indexProfil'])->name('users.indexProfile');
    Route::get('/penjual/users/{user_id}/edit', [PenjualController::class, 'editProfil'])->name('users.editProfile');
    Route::put('/penjual/users/{user_id}', [PenjualController::class, 'updateProfil'])->name('users.updateProfile');
    
    Route::get('/penjual/produk', [PenjualController::class, 'indexProduk'])->name('produk.index');
    Route::get('/penjual/produk/create', [PenjualController::class, 'createProduk'])->name('produk.create');
    Route::post('/penjual/produk', [PenjualController::class, 'storeProduk'])->name('produk.store');
    Route::get('/penjual/produk/{produk}/edit', [PenjualController::class, 'editProduk'])->name('produk.edit');
    Route::put('/penjual/produk/{produk}', [PenjualController::class, 'updateProduk'])->name('produk.update');
    Route::delete('/penjual/produk/{produk}', [PenjualController::class, 'destroyProduk'])->name('produk.destroy');;
});


Route::middleware(['userAkses:admin', 'auth'])->group(function () {
    Route::get('/admin', [AdminController::class,'indexAdmin']);

    Route::get('/admin/profil', [AdminController::class, 'indexProfil'])->name('users.indexProfil');
    Route::get('/admin/profil/{user_id}/edit', [AdminController::class, 'editProfil'])->name('users.editProfil');
    Route::put('/admin/profil/{user_id}', [AdminController::class, 'updateProfil'])->name('users.updateProfil');

    Route::get('/admin/mengelola_users', [AdminController::class, 'indexUsers'])->name('users.indexUsers');
    Route::get('/admin/mengelola_users/create', [AdminController::class, 'createUsers'])->name('users.createUsers');
    Route::post('/admin/mengelola_users', [AdminController::class, 'storeUsers'])->name('users.storeUsers');
    Route::get('/admin/mengelola_users/{user_id}/edit', [AdminController::class, 'editUsers'])->name('users.editUsers');
    Route::put('/admin/mengelola_users/{user_id}', [AdminController::class, 'updateUsers'])->name('users.updateUsers');
    Route::delete('/admin/mengelola_users/{user_id}', [AdminController::class, 'destroyUsers'])->name('users.destroyUsers');

    Route::get('/admin/produk_user', [AdminController::class, 'tampilUsers'])->name('produk.tampilUsers');
    Route::get('/admin/produk_user/{user_id}/produk', [AdminController::class, 'lihatProduk'])->name('produk.lihatProduk');
    Route::get('/admin/produk_user/{produk}/edit', [AdminController::class, 'editProduk'])->name('produk.edit');
    Route::put('/admin/produk_user/{produk}', [AdminController::class, 'updateProduk'])->name('produk.update');
    Route::delete('/admin/produk_user/{produk}', [AdminController::class, 'destroyProduk'])->name('produk.destroy');;
    
    Route::get('/admin/banner', [AdminController::class, 'indexBanner'])->name('banner.indexBanner');
});



Route::middleware(['userAkses:pengunjung', 'auth'])->group(function () {
    Route::get('/pengunjung', [AdminController::class,'pengunjung']);
   
});

