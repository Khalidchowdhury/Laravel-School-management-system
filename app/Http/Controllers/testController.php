<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
      
    
        
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function table()
    {
        return view('admin.admin.list');
    }




























}
