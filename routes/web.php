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
    return view('auth.login');
});

// Route::get('/beranda-kasir', function () {
//     return view('pages.index');
// });

// Route::get('/daftar-barang-terjual', function () {
//     return view('pages.barang_terjual');
// });

Route::get('/beranda-yo', 'BarangController@index')->name('beranda');
Route::get('/beranda-yoo', 'BarangController@index')->name('daftar-barang');

Route::post('/beranda-yo', 'BarangController@store');
Route::delete('/beranda-yo/{BarangModel}', 'BarangController@destroy');
Route::put('/beranda-yo/{BarangModel}', 'BarangController@update');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
