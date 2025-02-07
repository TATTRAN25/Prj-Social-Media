<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProfileController;

// home
Route::get('/', function () {
    return view('client/home');
});

// profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');