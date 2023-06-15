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
    <li class="breadcrumb-item active">Events</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col"></div>
    <div class="col-auto text-end float-end ms-auto">
    <a href="add-events.html" class="btn btn-primary">Add Announcement <i class="fas fa-plus"></i></a>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-12 col-md-12">
    <div class="card">
    <div class="card-body">
        


        <!-- Hero -->
        <div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
            <h2>বার্ষিক বনভোজন </h2>
            <p>
                রাজশাহী বিশ্ববিদ্যালয়ের গণযোগাযোগ ও সাংবাদিকতা বিভাগের প্রাক্তন শিক্ষার্থীদের সংগঠন জার্নালিজম অ্যালামনাই ফোরাম অব রাজশাহী ইউনিভার্সিটির (জাফরু) বার্ষিক বনভোজন অনুষ্ঠিত হয়েছে। দিনভর আড্ডা, সাংস্কৃতিক অনুষ্ঠান, মেয়েদের পিলো পাস, বাচ্চাদের দৌড় প্রতিযোগিতা, র্যাফল ড্রসহ বিভিন্ন আনন্দ-উল্লাসে মেতে ওঠেন গণযোগাযোগ ও সাংবাদিকতা বিভাগের সাবেক শিক্ষার্থীরা।
            </p>
        
            <hr class="my-4" />
        
            <p>
                <span class="text-danger">বিশেষ দ্রঃ </span>: পিকনিকের ছাড়া ১২৫০ টাকা প্রতিজনের 
            </p>
            <button type="button" class="btn btn-primary">
            Participant Now
            </button>
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