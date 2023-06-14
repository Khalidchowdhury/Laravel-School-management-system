<?php

namespace App\Http\Controllers;

use App\Models\library;
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
    

    // Time Tsble Controller
    public function timeTable()
    {
        return view('features.time-table');
    }

    public function invoisePage()
    {
        return view('features.invoices');
    }


    // Salary Controller
    public function salaryPage()
    {
        return view('features.Salary.salary');
    }


    function addSalary()
    {
        return view('features.Salary.add-salary');    
    }


    // Library Controller
    public function library()
    {
        $librarys = library::get();
        return view('features.library.library',[
            'librarys' => $librarys
        ]);
    }
    // show Library 
    public function showLibrary()
    {
        return view('features.library.add-books');
    }
    // Add Library 
    public function addLibrary(Request $request)
    {
        $this->validate($request,[
            'book_name'  => 'required',
            'department' => 'required',
            'language'   => 'required',
            'type'       => 'required',
            'status'     => 'required',
        ]);
        
        library::create([
            'book_name'  => $request -> book_name,
            'department' => $request -> department,
            'language'   => $request -> language,
            'type'       => $request -> type,
            'status'     => $request -> status,
        ]);
        return redirect() -> route('library.page') -> with('success','Your Book has been added');
    }






    // Event Page 
    public function showEventPage()
    {
        return view('features.event');
    }

    public function holiday()
    {
        return view('features.holiday');
    }











}
