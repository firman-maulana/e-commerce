<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('beranda');
});

// Beranda (public)
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// === ROUTE UNTUK USER YANG BELUM LOGIN ===
Route::middleware('guest')->group(function () {
    // Halaman login & proses login
    Route::get('/signIn', [AuthController::class, 'showSignInForm'])->name('signIn');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Halaman register & proses register
    Route::get('/signUp', [RegisterController::class, 'showSignUpForm'])->name('signUp');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

// === ROUTE UNTUK USER YANG SUDAH LOGIN ===

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Dashboard (hanya untuk yang sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/Auth/Google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

?>