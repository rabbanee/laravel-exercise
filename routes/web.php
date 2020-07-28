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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// myroute
Route::get('/hello', function () {
    echo '<h1>Hello World</h1>';
});

Route::get('/belajar', 'HelloController@index');

// Membuat route CRUD Siswa
Route::resource('siswa', 'SiswaController');
