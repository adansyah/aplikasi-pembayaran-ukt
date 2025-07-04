<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('page.dashboard');
});
Route::get('/riwayat', function () {
    return view('page.riwayat');
});
Route::get('/tagihan', function () {
    return view('page.tagihan');
});
