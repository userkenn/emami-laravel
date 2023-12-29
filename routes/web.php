<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\HomeController;    
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PengunjungController;


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
Route::post('/jumlahKlik/{id}', [HomeController::class,'jumlahKlik'])->name('jumlahKlik');

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
    Route::post('/penjual/produk', [PenjualController::class, 'storeProduk'])->name('produk.stores');
    Route::get('/penjual/produk/{produk}/edit', [PenjualController::class, 'editProduk'])->name('produk.edits');
    Route::put('/penjual/produk/{produk}', [PenjualController::class, 'updateProduk'])->name('produk.updates');
    Route::delete('/penjual/produk/{produk}', [PenjualController::class, 'destroyProduk'])->name('produk.destroys');;
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
    Route::get('/admin/banner/create', [AdminController::class, 'createBanner'])->name('banner.create');
    Route::post('/admin/banner', [AdminController::class, 'storeBanner'])->name('banner.store');
    Route::get('/admin/banner/{banner_id}/edit', [AdminController::class, 'editBanner'])->name('banner.editBanner');
    Route::put('/admin/banner/{banner_id}', [AdminController::class, 'updateBanner'])->name('banner.updateBanner');
});



Route::middleware(['userAkses:pengunjung', 'auth'])->group(function () {
    Route::get('/pengunjung', [PengunjungController::class,'indexPengunjung']);

    //KATEGORI
    Route::get('/pengunjung/makanan_berat', [PengunjungController::class,'makananBerat'])->name('makanan-berat.index');
    Route::get('/pengunjung/makanan_ringan', [PengunjungController::class,'makananRingan'])->name('makanan-ringan.index');
    Route::get('/pengunjung/minuman', [PengunjungController::class,'Minuman'])->name('minuman.index');
    Route::get('/pengunjung/pakaian_pria', [PengunjungController::class,'pakaianPria'])->name('pakaian-pria.index');
    Route::get('/pengunjung/pakaian_wanita', [PengunjungController::class,'pakaianWanita'])->name('pakaian-wanita.index');
    Route::get('/pengunjung/aksesoris_pria', [PengunjungController::class,'aksesorisPria'])->name('aksesoris-pria.index');
    Route::get('/pengunjung/aksesoris_wanita', [PengunjungController::class,'aksesorisWanita'])->name('aksesoris-wanita.index');
    Route::get('/pengunjung/lainnya', [PengunjungController::class,'Lainnya'])->name('lainnya.index');
});

