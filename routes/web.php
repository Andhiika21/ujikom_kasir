<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
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
    return view('login');
});

Route::get('/login',[LoginController::class, 'halamanLogin']);
Route::post('/proses-login',[LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk',[TransaksiController::class, 'index'])->name('produk');

Route::resource('produk',ProdukController::class);
Route::resource('dashboard',DashboardController::class);
Route::resource('transaksi',TransaksiController::class);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::resource('transaksi',TransaksiController::class);