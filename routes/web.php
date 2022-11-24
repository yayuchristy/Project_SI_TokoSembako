<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawanController;
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
Route::get('/', 'App\Http\Controllers\karyawanController@lihat');


Route::get('/inputkaryawan', 'App\Http\Controllers\karyawanController@input');

Route::post('/store', 'App\Http\Controllers\karyawanController@store');

Route::get('/hapuskaryawan', 'App\Http\Controllers\karyawanController@hapus');
    
Route::get('/cekcon', function () {
    return view('dbconn');
});

Route::get('/transaksi', function () {
    return view('Transaksi');
});





