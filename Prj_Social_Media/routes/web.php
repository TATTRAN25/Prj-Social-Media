<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProfileController;
use App\Http\Controllers\client\PostController;
use App\Http\Controllers\AuthController;

Route::prefix('v1')->group(function () {
    // Hiển thị form đăng ký
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    // Hiển thị form đăng nhập
    Route::get('login', [AuthController::class, 'showRegistrationForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // Hiển thị trang chủ
    Route::get('/home', function () {
        return view('home');
    })->middleware('auth')->name('home');
    // Quên mật khẩu
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    // Đặt lại mật khẩu
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // post
    Route::get('/post', [PostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
});
