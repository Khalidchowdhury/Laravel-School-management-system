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
        return view('auth.register');
    }

    // Register Page make dynamic
    public function RegPage(Request $request)
    {
        $this -> validate($request, [
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'password'  => 'required',
        ]);
        return $request -> all();
    }

    // Show doctor register page
    public function showDoctorRegPage()
    {
        return view('auth.teacher-register');
    }

    // Show Login Page
    public function showLoginPage()
    {
        return view('auth.login');
    }













}
