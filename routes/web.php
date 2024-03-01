<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Categori;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingPageController::class,'index'])->name('landing');

Route::get('/login',function(){
    return view('login.login');
});

Route::get('/register',function(){
    return view('login.register');
})->name('register');

Route::post('/register/store',[LoginController::class,'register'])
->name('login.register.store');
Route::post('/login', [LoginController::class,'login'])
->name('login.login');
Route::get('/logout',[LoginController::class,'logout'])
->name('logout');

Route::get('/forget',function(){
    return view('login.forget');
});

Route::get('/recovery',function(){
    return view('login.recovery');
});

Route::get('/dashboard',function(){
    return view('dashboard.dashboard');
});

Route::get('data/petugas',[UserController::class,'index'])->name('data.petugas');
Route::get('data/petugas/create',[UserController::class,'create'])->name('data.petugas.create');
Route::post('data/petugas',[UserController::class,'store'])->name('data.petugas.store');
Route::get('data/petugas/{id}/show',[UserController::class,'show'])->name('data.petugas.show');
Route::get('data/petugas/{id}/edit',[UserController::class,'edit'])->name('data.petugas.edit');
Route::PUT('data/petugas/update/{id}',[UserController::class,'update'])->name('data.petugas.update');
Route::PUT('data/petugas/update_profile/{id}',[UserController::class,'update_profile'])->name('data.petugas.profile');
Route::DELETE('data/petugas/delete/{id}',[UserController::class,'destroy'])->name('data.petugas.delete');

Route::resource('data/akses',AksesController::class);
Route::resource('data/role',RoleController::class);
Route::POST('data/barang/edit',[BarangController::class,'tambah_stok'])->name('tambah_stok');
Route::resource('data/barang',BarangController::class);

Route::resource('data/categori',CategoriController::class);
Route::resource('penjualan',PenjualanController::class);
Route::get('keranjang',[PenjualanController::class,'keranjang'])->name('keranjang');
Route::get('batal_pesan',[PenjualanController::class,'batal_pesan'])->name('batal_pesan');
Route::post('checkout',[PenjualanController::class,'checkout'])->name('checkout');
Route::get('transaksi',[TransaksiController::class,'index'])->name('transaksi.index');
Route::get('transaksi/{id}/detail',[TransaksiController::class,'detail_transaksi'])->name('transaksi.detail');
Route::PUT('transaksi/bayar/{id}',[TransaksiController::class,'bayar'])->name('transaksi.bayar');
Route::get('transaksi/terbayar',[TransaksiController::class,'sudah_bayar'])->name('transaksi.terbayar');
Route::get('transaksi/{id}/pdf',[TransaksiController::class,'nota'])->name('nota.pdf');
