<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    // Auth Setup

    // Show Register Page
    public function showRegPage()
    {
        return view('register');
    }




    // Show Login Page
    public function showLoginPage()
    {
        return view('login');
    }













}
