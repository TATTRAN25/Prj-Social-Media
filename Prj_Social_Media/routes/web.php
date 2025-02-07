<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProfileController;
use App\Http\Controllers\client\PostController;

// home
Route::get('/', function () {
    return view('client/home');
});

// profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// post
Route::get('/post', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');