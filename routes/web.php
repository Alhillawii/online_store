<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboard\CategoryController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\MessageController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('products', ProductController::class);
});



Route::get('/index', function () {
    return view('layouts.index');
});




Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('categories', CategoryController::class);
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('users', UserController::class);
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('messages', MessageController::class);
});