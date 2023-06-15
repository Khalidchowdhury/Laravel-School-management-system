@extends('layouts.master')

@section('content')
    
<div class="main-wrapper">

    <div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Events</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('event.page') }}">Events</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col"></div>
    <div class="col-auto text-end float-end ms-auto">
    <a href="{{ route('event.page') }}" class="btn btn-primary">Back</a>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-12 col-md-12">
    <div class="card">
    <div class="card-body">
        


        <!-- Hero -->
        <div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
            <h2 class="text-center p-4">{{ $events -> title }}</h2>
            <hr>
            <p class="mt-5 text-justify">
                {{ $events -> description }}    
            </p>
        
            <hr class="my-4" />
        
            <div class="centerBtn text-center mt-5">
                <button type="button" class="btn btn-primary">
                    <a class="text-light" href="{{ $events -> button_link }}">{{ $events -> button_name }}</a>
                </button>
            </div>

            </div>
        </div>
        <!-- Hero --> 




    </div>
    </div>
    </div>
    </div>
    
    <div class="modal fade none-border" id="my_event">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Add Event</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body"></div>
    <div class="modal-footer justify-content-center">
    <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
    <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    
    </div>
    
    </div>
    
@endsection