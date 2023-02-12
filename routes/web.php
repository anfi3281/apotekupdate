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

Route::get('/', 'ApotekController@index');
Route::get('/update/{kode}', 'ApotekController@edit');
Route::get('/hapus/{kode}', 'ApotekController@hapus');
Route::post('/tambah', 'ApotekController@tambah');
Route::post('/update', 'ApotekController@perbarui');
Route::post('/kelola', 'ApotekController@kelola');
