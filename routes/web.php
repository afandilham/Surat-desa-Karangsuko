<?php

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

// Halaman login  
// Route::get('/', 'DashboardController@login');
Auth::routes(['reset' => false]);


/**
 * Akses route hanya diperbolehkan ketika login saja
 * Route dimasukkan ke dalam sebuah grup authentikasi
 * ketika mengetik sub route, maka akan tetap redirect ke halaman login
 * Ex: localhost:8000/penduduk => maka otomatis akan kembali ke halaman login
 * dan tidak dapat mengakses halaman penduduk tersebut.
 * **/

Route::middleware(['auth'])->group(function () {
  /**
   * Dashboard
   * */ 
  Route::get('/', 'HomeController@index')->name('dashboard');
  
  /**
   * Kependudukan
   * */ 
  // Get data
  Route::get('/penduduk', 'KependudukanController@index');
  
  // Cari data
  Route::get('/penduduk/cari', 'KependudukanController@cari');
  
  // Tambah data
  Route::get('/penduduk/tambah', 'KependudukanController@tambah');
  Route::post('/penduduk/store', 'KependudukanController@store');
  
  // Edit data
  Route::get('/penduduk/edit/{id}', 'KependudukanController@edit');
  Route::put('/penduduk/update/{id}', 'KependudukanController@update');
  
  // Delete data
  Route::get('/penduduk/hapus/{id}', 'KependudukanController@hapus');
  
  /***
   * Admin
   * */
  // Get Data
  Route::get('/admin', 'AdminController@index');
  Route::get('/admin/tentang', 'AdminController@tentang');
  
  // Delete data
  Route::get('/admin/hapus/{id}', 'AdminController@hapus');
  
  // Surat
  Route::get('/surat', 'SuratController@index');
  
  // Surat keterangan domisili
  Route::get('/surat/form-domisili', 'SuratController@form_domisili');
  Route::get('/surat/form-domisili/cari', 'SuratController@cari');
  // Form untuk mencetak
  Route::get('/surat/form-domisili/cetak_domisili/{id}', 'SuratController@cetak_domisili');
  // Cetak pdf surat
  Route::get('/surat/form-domisili/cetak_pdf', 'SuratController@print_domisili');
  
});

