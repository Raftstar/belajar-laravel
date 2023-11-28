<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/data', function () {
    return view('data');
});
//Routing Mengatur Dan Menampilkan Form
Route::get('/form', function () {
    return view('form');
});
Route::get('/soal', function () {
    return view('soal.index');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::post('/data/store', 'App\Http\Controllers\SiswaController@store');
Route::get('/data', 'App\Http\Controllers\SiswaController@index');
Route::get('/data/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
Route::patch('/data/update/{id}', 'App\Http\Controllers\SiswaController@update');
Route::get('/data/hapus/{id}', 'App\Http\Controllers\SiswaController@hapus');
