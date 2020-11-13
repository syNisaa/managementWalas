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

Route::get('/coba', function () {
    return view('layouts.app');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

route::get('/dashboard', [LandingController::class, "dash"]);
// Route::get('/showkelas', [LandingController::class, "showkelas"]);

Route::get('/home' , 'DashController@showkelas')->name('dash');
// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/manage', 'DashController@check');

// Keuangan 
Route::get('/keuangan', 'keuanganController@index');
Route::get('/show/{id}', 'keuanganController@show');
Route::put('/keuangan/update/{id}', 'KeuanganController@update');
Route::post('/keuangan/tambah', 'keuanganController@tambah');
Route::get('/keuangan/hapus/{id}', 'keuanganController@hapus');
