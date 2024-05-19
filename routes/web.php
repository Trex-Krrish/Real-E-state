<?php

use App\Http\Controllers\BuyingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/buy', [BuyingController::class, 'index'])->name('buy.index');
    Route::post('/buy', [BuyingController::class, 'search'])->name('buy.search');
    
    Route::get('/sell', [SellingController::class, 'index'])->name('sell.index');
    Route::post('/sell', [SellingController::class, 'store'])->name('sell.store');
});
