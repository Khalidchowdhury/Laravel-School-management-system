<?php

namespace App\Http\Controllers;

use App\Models\Fees;
use App\Models\Event;
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
            'fees_id' => 'required',
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
        Fees::create([
            'fees_id' => $request -> fees_id,
            'name'    => $request -> name,
            'class'   => $request -> class,
            'shift'   => $request -> shift,
            'gender'  => $request -> gender,
            'amount'  => $request -> amount,
            'paid'    => $request -> paid,
            'due'     => $request -> due,
            'sDate'   => $request -> sDate,
            'eDate'   => $request -> eDate,
        ]);
        return redirect() -> route('fees.page') -> with('success', 'Your Fees Has been Added');

    }



    // Fees Controller 
    public function fees()
    {
        $fees = fees::get();
        return view('features.fees.fees',[
            'fees' => $fees
        ]);
    }
    // Edit feachers
    public function editfees()
    {
        return view('features.fees.edit');
    }
    // View feacher
    public function viewfees($id)
    {
        $fees = Fees::findOrFail($id);
        return view('features.fees.view',[
            'fees' => $fees
        ]);
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





    /**
     * 
     * Event Controller
     * 
     */

    // Event Page 
    public function showEventPage()
    {
        $events = Event::get();
        return view('features.event.event', [
            'events' => $events
        ]);
    }
    // Event single view page 
    public function viewEventPage($id)
    {
        $events = Event::findOrFail($id);
        return view('features.event.view',[
            'events' => $events
        ]);
    }
    // add event page 
    public function addEventPage()
    {
        return view('features.event.add');
    }
    public function regEventPage(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'button_name' => 'required',
            'button_link' => 'required',
        ]);
        Event::create([
            'title'       => $request -> title,
            'description' => $request -> description,
            'button_name' => $request -> button_name,
            'button_link' => $request -> button_link,
        ]);

        return redirect() -> route('event.page') -> with('success', 'Your announcement has been successfully added.');

    }
    // event delete 
    public function deleteEventPage($id)
    {
        $delete_data = Event::findOrFail($id);
        $delete_data ->  delete();
        
        return redirect() -> route('event.page') -> with('success', 'Your announcement delete successfully .');
    } 








    // Holiday page 
    public function holiday()
    {
        return view('features.holiday');
    }











}
