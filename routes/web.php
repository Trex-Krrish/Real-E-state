<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/register',[HomeController::class, 'register'])->name('login');
