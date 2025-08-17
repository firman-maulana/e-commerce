<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatAdminController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


// === ROUTE UNTUK HALAMAN UTAMA ===
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');


// === ROUTE UNTUK USER YANG BELUM LOGIN ===
Route::middleware('guest')->group(function () {
    // Halaman login & proses login
    Route::get('/signIn', [AuthController::class, 'showSignInForm'])->name('signIn');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Halaman register & proses register
    Route::get('/signUp', [RegisterController::class, 'showSignUpForm'])->name('signUp');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    // Forgot password (OTP)
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset password form dan proses
    Route::get('/reset-password', [ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// === ROUTE UNTUK USER YANG SUDAH LOGIN ===
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// === GOOGLE LOGIN ===
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/chat-admin', [ChatAdminController::class, 'index'])->name('chatAdmin');
Route::post('/chat-admin', [ChatAdminController::class, 'store'])->name('chatAdmin.store');


Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
Route::post('/tracking', [TrackingController::class, 'track'])->name('tracking.search');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/howtoOrder', function () {
    return view('howtoOrder');
})->name('howtoOrder');

Route::get('/refundPolicy', function () {
    return view('refundPolicy');
})->name('refundPolicy');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');


Route::get('/product-detail/{id}', [ProductController::class, 'show'])->name('detailProduct');
// atau
Route::get('/detail-product', [ProductController::class, 'show'])->name('detailProduct');



// ADMIN //
Route::prefix('admin')->group(function() {
    Route::get('/login', [App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function() {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
});

});
