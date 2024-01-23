<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/login',function(){
    return view('login.login');
});

Route::get('/register',function(){
    return view('login.register');
});

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
Route::get('data/petugas/{id}/edit',[UserController::class,'edit'])->name('data.petugas.edit');
Route::PUT('data/petugas/update/{id}',[UserController::class,'update'])->name('data.petugas.update');
Route::DELETE('data/petugas/delete/{id}',[UserController::class,'destroy'])->name('data.petugas.delete');

Route::resource('data/akses',AksesController::class);
Route::resource('data/role',RoleController::class);