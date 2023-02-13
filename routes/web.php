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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PenggunaController@papar');

// Route::get('userList', function(){
//     return view('userList');
// })->name('userList');

Route::get('userList', 'PenggunaController@papar')->name('userList');
Route::post('userDaftar', 'PenggunaController@daftar')->name('userDaftar');
Route::get('userAdd', 'PenggunaController@tambah')->name('userAdd');
Route::get('userUbah/{pengguna}', 'PenggunaController@ubah')->name('userUbah');
Route::post('userUbahSave/{pengguna}', 'PenggunaController@ubahSave')->name('userUbahSave');
Route::get('userStat', 'PenggunaController@statistik')->name('userStat');
