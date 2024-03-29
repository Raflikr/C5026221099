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
    return view('welcome');
});

Route::get('halo', function () {
    //Bisa diisi program apa saja
    return "Halo Apa kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo Apa kabar</h1>" ;
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('link', function () {
	return view('link');
});

Route::get('style', function () {
	return view('style');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('responsive2', function () {
	return view('responsive2');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('company', function () {
	return view('company');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('card', function () {
	return view('card');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
	return view('home');
});

Route::get('/blog/tentang', function () {
	return view('tentang');
});
Route::get('/blog/kontak', function () {
	return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
//view only
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD Latihan EAS Laki2
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiKuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');


//route CRUD Latihan EAS Perempuan
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index3');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//route CRUD Tugas Database Kopi
Route::get('/kopi','App\Http\Controllers\KopiController@indexkopi');
Route::get('/kopi/tambahkopi','App\Http\Controllers\KopiController@tambahkopi');
Route::post('/kopi/store','App\Http\Controllers\KopiController@store');
Route::get('/kopi/editkopi/{id}','App\Http\Controllers\KopiController@editkopi');
Route::post('/kopi/update','App\Http\Controllers\KopiController@update');
Route::get('/kopi/hapus/{id}','App\Http\Controllers\KopiController@hapus');
Route::get('/kopi/cari','App\Http\Controllers\KopiController@cari');
Route::get('/kopi/viewkopi/{id}', 'App\Http\Controllers\KopiController@viewkopi');

//route CRUD EAS Kode FF
Route::get('/counter','App\Http\Controllers\CounterController@indexcounter');
