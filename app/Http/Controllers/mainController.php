<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    

    public function showHomePage()
    {
        return view('website.index');
    }

    public function showAboutPage()
    {
        return view('website.about');
    }

    public function showCoursesPage()
    {
        return view('website.courses');
    }

    public function showContactPage()
    {
        return view('website.contact');
    }





















}
