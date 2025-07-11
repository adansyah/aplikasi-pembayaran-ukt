<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [Authcontroller::class, 'showForgot']);
Route::post('/forgot-password', [Authcontroller::class, 'sendResetLink']);
Route::get('/reset-password/{token}', [Authcontroller::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [Authcontroller::class, 'resetPassword']);

Route::get('/auth/google', [Authcontroller::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [Authcontroller::class, 'handleGoogleCallback']);

Route::get('/dashboard', function () {
    return view('page.dashboard');
});
Route::get('/riwayat', function () {
    return view('page.riwayat');
});
Route::get('/tagihan', function () {
    return view('page.tagihan');
});
Route::get('/bukti', function () {
    return view('page.bukti');
});
