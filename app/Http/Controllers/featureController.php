<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class featureController extends Controller
{
    // Here is some Necessary Feature Controller 

    // add feacher
    public function addfees()
    {
        return view('features.fees.add');
    }
    // add feacher
    public function createFess(Request $request)
    {
        $this->validate($request,[
            'fees-id' => 'required',
            'name'    => 'required',
            'class'   => 'required',
            'shift'   => 'required',
            'gender'  => 'required',
            'amount'  => 'required',
            'paid'    => 'required',
            'due'     => 'required',
            'sDate'   => 'required',
            'eDate'   => 'required',
        ]);
        return $request -> all();
    }



    // Fees Controller 
    public function fees()
    {
        return view('features.fees.fees');
    }
    // Edit feachers
    public function editfees()
    {
        return view('features.fees.edit');
    }
    // View feacher
    public function viewfees()
    {
        return view('features.fees.view');
    }
    









}
