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

// Untuk mencoba tampilan index
Route::get('/', function () {
    return view('berita.index');
})->name('coba.index');

// Untuk mencoba tampilan detail
Route::get('/detail', function () {
    return view('berita.detail');
})->name('coba.detail');

// untuk authentification, tapi ini nanti
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
