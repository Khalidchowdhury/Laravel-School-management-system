<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\testController;



// Login Route
Route::get('/', [ authController::class, 'login']) -> name('login.page');
Route::post('/', [ authController::class, 'authLogin']) -> name('authLogin.page');

// Dashboard route
Route::get('/dashboard', [ testController::class, 'dashboard']) -> name('dashboard.page');
Route::get('/table', [ testController::class, 'table']) -> name('table.page');



























