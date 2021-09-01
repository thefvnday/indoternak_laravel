<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\riwayatPenjualan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

//dashboard
Route::get('/dashboard', [dashboardController::class, 'index']);

//riwayatPenjualan
Route::get('/riwayatPenjualan', [riwayatPenjualan::class, 'index']);

//dataproduk
Route::get('/dataproduk', [produkController::class, 'index']);
Route::post('/dataproduk', [produkController::class, 'store']);
Route::get('/dataproduk/tambah', [produkController::class, 'create']);
Route::delete('/dataproduk/{produk}', [produkController::class, 'destroy']);
Route::get('/dataproduk/{produk}/edit', [produkController::class, 'edit']);
Route::patch('/dataproduk/{produk}', [produkController::class, 'update']);

//pembayaran
//
Route::post('/pembayaran', [pembayaranController::class, 'store']);


Route::get('/', App\Http\Livewire\Home::class);
Route::get('/produk/hewan/{hewanId}', App\Http\Livewire\ProductHewan::class);
Route::get('/produk/{id}', App\Http\Livewire\ProductDetail::class);
Route::get('/bayar/{id}', App\Http\Livewire\Pembayaran::class);
// Route::post('/bayar/simpan', [App\Http\Livewire\Pembayaran::class, 'store']);

