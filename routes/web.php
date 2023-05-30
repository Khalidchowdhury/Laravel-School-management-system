<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;


// School Management system



// Frontend Route setup
Route::get('/', [frontendController::class, 'homePage']) -> name('home.page');
Route::get('/about', [frontendController::class, 'aboutPage']) -> name('about.page');
Route::get('/courses', [frontendController::class, 'coursesPage']) -> name('courses.Page');
Route::get('/contact', [frontendController::class, 'contactPage']) -> name('contact.Page');



// Dashboard Route setup


// Auth setup 
Route::get('/dashboard', [frontendController::class, 'indexPage']) -> name('index.page');















