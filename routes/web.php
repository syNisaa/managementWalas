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
    return view('landingpage');
});

// Route::get('/loginwalas', function () {
//     return view('loginwalas');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Keuangan 
Route::get('/keuangan', 'keuanganController@index');
Route::post('/keuangan/tambah', 'keuanganController@tambah');
Route::get('/keuangan/hapus/{id}', 'keuanganController@hapus');
