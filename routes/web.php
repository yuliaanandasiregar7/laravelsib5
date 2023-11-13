<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;

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
    return view('welcome');
});

Route::get('/salam',function(){
    return "Assalamualaikum selamat belajar Laravel";
});
//tambah routing
Route::get('/staff/{nama}/{divisi}', function($nama, $divisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$divisi;
});

//routing dengan memanggil nama file dari view
Route::get('/kondisi', function(){
    return view('kondisi');
});
Route::get('/nilai', function(){
    return view('coba.nilai');
});

//routing dengan view dan array data
Route::get('/daftarnilai',function(){
    return view('coba.daftar');
});

Route::get('/datamahasiswa',[LihatNilaiController::class, 'dataMahasiswa']);

Route::prefix('admin')->group(function(){
Route::get('/dashboard',[DashboardController::class, 'index']);
//contih pemanggilan secara satu persatu function menggunkan get, put,update, delete
Route::get('/notfound',[PagenotController::class,'index']);
//memanggil seluruh fungsi atau function
Route::get('/kartu', [KartuController::class, 'index']);
Route::get('/kartu/show/{id}', [KartuController::class, 'show']);
Route::get('/kartu/delete/{id}', [KartuController::class, 'destroy']);


//memanggil fungi atau satu persatu
Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
Route::get('/jenis_produk/create', [JenisProdukController::class, 'create']);
Route::post('/jenis_produk/store', [JenisProdukController::class, 'store']);
Route::get('/jenis_produk/edit/{id}', [JenisProdukController::class, 'edit']);
Route::post('/jenis_produk/update/{id}', [JenisProdukController::class, 'update']);

Route::get('/produk',[ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/show/{id}', [ProdukController::class, 'show']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);


Route::resource('/pelanggan', PelangganController::class);
});