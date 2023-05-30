<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{

    // Frontend Page all Controller  


    /**
     * Home Page 
     */
    public function homePage()
    {
        return view('website.home');        
    }
    /**
     * About Page
     **/
    public function aboutPage()
    {
        return view('website.about');
    }
    /**
     * About Page
     **/
    public function coursesPage()
    {
        return view('website.courses');
    }
    /**
     * About Page
     **/
    public function contactPage()
    {
        return view('website.contact');
    }

    














































}
