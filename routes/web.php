<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\Auth\authController;


// School Management system



// Frontend Route setup
Route::get('/', [frontendController::class, 'homePage']) -> name('home.page');
Route::get('/about', [frontendController::class, 'aboutPage']) -> name('about.page');
Route::get('/courses', [frontendController::class, 'coursesPage']) -> name('courses.Page');
Route::get('/contact', [frontendController::class, 'contactPage']) -> name('contact.Page');



// Dashboard Route setup


// Register Auth setup 
Route::get('/register', [authController::class, 'showRegPage']) -> name('register.page');

// Login Auth setup 
Route::get('login', [authController::class, 'showLoginPage']) -> name('login.page');

// Management system main show page 
// Route::get('/dashboard', [authController::class, 'showIndexPage']) -> name('index.page');













