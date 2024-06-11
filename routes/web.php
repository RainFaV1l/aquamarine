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

Route::controller(\App\Http\Controllers\RateController::class)->prefix('rate')->name('rate.')->group(function () {
    Route::get('/rate', 'index')->name('index');
});
Route::controller(\App\Http\Controllers\CartController::class)->prefix('cart')->name('cart.')->group(function () {
    Route::get('/cart', 'index')->name('index');
});
Route::controller(\App\Http\Controllers\EntertainmentController::class)->prefix('entertainments')->name('entertainments.')->group(function () {
    Route::get('/entertainments', 'index')->name('index');
});
Route::controller(\App\Http\Controllers\CommentController::class)->prefix('comments')->name('comments.')->group(function () {
    Route::get('/comments', 'index')->name('index');
});
Route::controller(\App\Http\Controllers\OrderController::class)->prefix('order')->name('order.')->group(function () {
    Route::get('/order', 'index')->name('index');
});
Route::controller(\App\Http\Controllers\AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/admin', 'index')->name('index');
});

Route::controller(\App\Http\Controllers\UserController::class)->prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('/profile', 'index')->name('index');
    Route::post('/update', 'update')->name('update');
});
