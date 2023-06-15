@extends('layouts.master')

@section('content')
<div class="main-wrapper">

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Event</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('event.page') }}">Events</a></li>
                            <li class="breadcrumb-item active">Add Event</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">


    {{-- Event Form --}}
    <form action="{{ route('reg.event.page') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <h5 class="form-title"><span>Announcement Information</span></h5>
            </div>

            <div class="col-12 col-sm-12">
                <div class="form-group">
                    <label>Title <span class="login-danger">*</span></label>
                    <input name="title" type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="form-group">
                    <label>Description <span class="login-danger">*</span></label>
                    <input name="description" type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Button name <span class="login-danger">*</span></label>
                    <input name="button_name" type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Button url <span class="login-danger">*</span></label>
                    <input name="button_link" type="text" class="form-control">
                </div>
            </div>

            </div>
            <div class="col-12">
                <div class="student-submit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
    {{-- event end --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
    