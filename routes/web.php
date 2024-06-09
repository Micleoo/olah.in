<?php

use App\Http\Controllers\keranjangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KursusController;
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

Route::get('/', function () {
    return view('Home', [ "title" => "Home"]);
});

Route::get('/', function () {
    return view('Home', [ "title" => "Home"]);
})->name('home');

Route::get('/marketplace', function () {
    return view('Marketplace', ["title" => "Marketplace"]);
})->name('marketplace');

Route::get('/', function () {
    return view('Home', ["title" => "Home"]);
})->name('Home');

Route::get('/kursus', [KursusController::class, 'index'])->name('kursus');
Route::get('/kursus/{id}', [KursusController::class, 'show'])->name('kursus.show');



Route::get('/kursus', function () {
    return view('kursus', ["title" => "Kursus"]);
})->name('kursus');


Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'logout']);

Route::get('/Sign-up', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Sign-up', [RegisterController::class, 'store']);

Route::get('/Kursus', function () {
    return view('Kursus', ["title" => "Kursus"]);
});

Route::get('/Marketplace',[ProdukController::class,'index'])->name('showMarketPlace');
Route::get('/Marketplace/uploadProduk',[ProdukController::class,'showUploadProduct'])->name('showUploadProduk');

Route::post('/Marketplace/uploadProduk',[ProdukController::class,'store'])->name('UploadProduk');


Route::get('/Keranjang', function () {
    return view('Keranjang', ["title" => "Keranjang"]);
});

// Menampilkan semua item dalam keranjang
Route::get('/Keranjang', [keranjangController::class, 'index'])->name('keranjang.index');

// Menambahkan item ke keranjang
Route::post('/Keranjang', [KeranjangController::class, 'store'])->name('keranjang.store');

// Menghapus item dari keranjang
Route::delete('/Keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
