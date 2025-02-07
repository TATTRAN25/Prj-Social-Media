<?php

use Illuminate\Support\Facades\Route;
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
});
