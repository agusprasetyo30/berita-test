<?php

use App\News;
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

// Ini route untuk pengguna yang tidak login
Route::group(['auth' => 'guest', 'as' => 'berita.'], function () {
    // Untuk mencoba tampilan index
    Route::get('/', 'NewsReaderController@dashboard')->name('dashboard');

    // Untuk mencoba tampilan detail berita
    Route::get('/{slug_title}/detail', 'NewsReaderController@detailBerita')->name('detail');
});


// Ini route untuk pengguna yang login
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('berita', 'NewsController',
    ['except' => 'show']);
    
    Route::resource('kategori', 'CategoryController',
    ['except' => 'show']);

    Route::resource('pengguna', 'UserController',
    ['except' => ['show', 'destroy']]);
});

// untuk authentification, tapi ini nanti
Auth::routes([
    'login'     => true,
    'logout'    => true,
    'register'  => false,
    'confirm'   => false,
    'verify'    => false
]);

