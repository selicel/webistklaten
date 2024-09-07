<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[loginController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rekap', function () {
    return view('rekap');
});

Route::get('/penjelasan', function () {
    return view('penjelasan');
});

Route::get('/PrinsipSDI', function () {
    return view('prinsipSDI');
});

Route::get('/KualitasData', function () {
    return view('kualitasData');
});

Route::get('/ProsesBisnisStatistik', function () {
    return view('prosesBisnis');
});

Route::get('/Kelembagaan', function () {
    return view('kelembagaan');
});

Route::get('/StatistikNasional', function () {
    return view('statistikNasional');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/InputNilai', function () {
    return view('inputNilai');
});