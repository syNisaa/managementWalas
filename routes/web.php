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
Route::get('/keuangannn', 'DashController@show');
Route::put('/keuangan/update/{id}', 'keuanganController@update');
Route::post('/keuangan/tambah', 'keuanganController@tambah');
Route::get('/keuangan/hapus/{id}', 'keuanganController@hapus');

// ADM
Route::get('/adm', 'DashController@showadm');
Route::post('/adm/tambah', 'AdmController@store');
Route::put('/adm/update/{id}', 'AdmController@update');
Route::get('/adm/hapus/{id}', 'AdmController@hapus');

// Absensi 
Route::get('/absen', 'dashController@showabsen');
Route::post('/absen/tambah', 'AbsensiController@tambah');
Route::get('/absen/hapus/{id}', 'AbsensiController@hapus');
Route::put('/absen/update/{id}', 'AbsensiController@update');
Route::get('/absen/cetak_pdf', 'DashController@cetak_pdff');

// kasus siswa
Route::get('/kasus', 'DashController@showkasus');
Route::post('/kasus/tambah', 'KasusController@store');
Route::get('/kasus/hapus/{id}', 'KasusController@delete');
Route::put('/kasus/update/{id}', 'KasusController@update');

// Rapat Ortu
Route::get('/rapat', 'DashController@showrapat');
Route::post('/rapat/tambah', 'RapatController@store');
Route::get('/rapat/hapus/{id}', 'RapatController@delete');
Route::put('/rapat/update/{id}', 'RapatController@update');

// Jadwal 
Route::get('/jadwal', 'DashController@showjadwal');
Route::get('/jadwal/cetak_pdf', 'DashController@cetak_pdf');

Route::get('/siswa', 'DashController@showsiswa');

//Route Jadwal Rapat
Route::get('/rapat', 'DashController@showrapat');
Route::post('/add_jadwal', 'RapatController@add_jadwal');
Route::get('/edit_jadwal/{id_jadwal}', 'RapatController@edit_jadwal');
Route::put('/update/{id_jadwal}', 'RapatController@upd_jadwal');
Route::get('/delete_jadwal/{id_menu}', 'RapatController@del_jadwal');