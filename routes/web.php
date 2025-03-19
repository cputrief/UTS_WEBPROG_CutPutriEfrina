<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/master', function () {
    return view('master');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/siswa', function () {
    return view('dt_siswa');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/form siswa', function () {
    return view('form_siswa');
});

Route::get('/guru', function () {
    return view('dt_guru');
});

Route::get('/kelas', function () {
    return view('dt_kelas');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/add admin', function () {
    return view('add_admin');
});

Route::get('/login', function () {
    return view('login');
});