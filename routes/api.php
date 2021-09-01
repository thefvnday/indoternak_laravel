<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProduk;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//dataproduk
Route::get('/dataproduk', [ApiProduk::class, 'index']);
Route::post('/dataproduk', [ApiProduk::class, 'store']);
Route::get('/dataproduk/tambah', [ApiProduk::class, 'create']);
Route::delete('/dataproduk/{produk}', [ApiProduk::class, 'destroy']);
Route::get('/dataproduk/{produk}/edit', [ApiProduk::class, 'edit']);
Route::patch('/dataproduk/{produk}', [ApiProduk::class, 'update']);
