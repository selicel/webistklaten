<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rekap', function () {
    return view('rekap');
});

Route::get('/penjelasan', function () {
    return view('penjelasan');
});

Route::get('/prinsipSDI', function () {
    return view('prinsipSDI');
});

Route::get('/kualitasData', function () {
    return view('kualitasData');
});
