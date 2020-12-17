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
Route::group(['auth' => 'guest'], function () {
    // Untuk mencoba tampilan index
    Route::get('/', function () {
        return view('berita.index');
        // dd(News::with(['users', 'categories'])->get());
    })->name('coba.index');

    // Untuk mencoba tampilan detail
    Route::get('/detail', function () {
        return view('berita.detail');
    })->name('coba.detail');
});


// Ini route untuk pengguna yang login
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
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

// Route::get('/home', 'HomeController@index')->name('home');
