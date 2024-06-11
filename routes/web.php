<?php

use Illuminate\Support\Facades\Route;


Route::controller(\App\Http\Controllers\IndexController::class)->name('index.')->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::controller(\App\Http\Controllers\UserController::class)->prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('/profile', 'index')->name('index');
    Route::post('/update', 'update')->name('update');
});
