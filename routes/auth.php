<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;

// LOGIN
Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/auth/google', [GoogleController::class, 'redirect']);

    Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
});

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');