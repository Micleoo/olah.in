<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Login', function () {
    return view('Login', ["title" => "Login"]);
});

Route::get('/Sign-up', function () {
    return view('Sign-up', ["title" => "Sign-up"]);
});

Route::get('/Kursus', function () {
    return view('Kursus', ["title" => "Kursus"]);
});

Route::get('/Marketplace', function () {
    return view('Marketplace', ["title" => "Marketplace"]);
});
