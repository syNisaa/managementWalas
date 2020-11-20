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

Route::get('/tampil' , 'DashController@main')->name('main');

Route::get('/home' , 'DashController@showkelas')->name('dash');
Route::post('/manage', 'DashController@check');


// Keuangan 
Route::get('/keuangan', 'keuanganController@index');
Route::get('/show/{id}', 'keuanganController@show');
Route::put('/keuangan/update/{id}', 'KeuanganController@update');
Route::post('/keuangan/tambah', 'keuanganController@tambah');
Route::get('/keuangan/hapus/{id}', 'keuanganController@hapus');

// ADM
Route::get('/adm', 'AdmController@index');
Route::post('/adm/tambah', 'AdmController@store');
Route::put('/adm/update/{id}', 'AdmController@update');
Route::get('/adm/hapus/{id}', 'AdmController@hapus');

// Absensi 
Route::get('/absen', 'AbsensiController@index');
Route::post('/absen/tambah', 'AbsensiController@tambah');
Route::get('/absen/hapus/{id}', 'AbsensiController@hapus');
Route::put('/absen/update/{id}', 'AbsensiController@update');

// kasus siswa
Route::get('/kasus', 'KasusController@index');
Route::post('/kasus/tambah', 'KasusController@store');
Route::get('/kasus/hapus/{id}', 'KasusController@delete');
Route::put('/kasus/update/{id}', 'KasusController@update');

// Rapat Ortu
Route::get('/rapat', 'RapatController@index');
Route::post('/rapat/tambah', 'RapatController@store');
Route::get('/rapat/hapus/{id}', 'RapatController@delete');
Route::put('/rapat/update/{id}', 'RapatController@update');

// Jadwal 
Route::get('/jadwal', 'JadwalController@index');
