@extends('layouts.master')

@section('content')
<div class="main-wrapper">


    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Books</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="library.html">Library</a></li>
                            <li class="breadcrumb-item active">Add Books</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">



        {{-- Add Book Form --}}
        <form>
            <div class="row">
                <div class="col-12">
                    <h5 class="form-title"><span>Book Information</span></h5>
                </div>

                {{-- First colum  --}}
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Book Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Department <span class="login-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Language <span class="login-danger">*</span></label>
                        <select class="form-control select">
                            <option>Select Language</option>
                            <option>Bangla</option>
                            <option>English</option>
                            <option>Hindi</option>
                            <option>Spanish</option>
                            <option>Arabic</option>
                        </select>
                    </div>
                </div>


                {{-- Secend Colums --}}
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Type <span class="login-danger">*</span></label>
                        <select class="form-control select">
                            <option>Select Type</option>
                            <option>Book</option>
                            <option>DVD</option>
                            <option>CD</option>
                            <option>Newspaper</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                        <label>Status <span class="login-danger">*</span></label>
                        <select class="form-control select">
                            <option>Select Status</option>
                            <option class="badge badge-success">In Stock</option>
                            <option class="badge badge-danger">Out of Stock</option>
                        </select>
                    </div>
                </div>


                <div class="col-12">
                    <div class="student-submit">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


            </div>
        </form>
        {{-- Form end --}}





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


