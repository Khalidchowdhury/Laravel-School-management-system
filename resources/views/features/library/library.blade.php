@extends('layouts.master')

@section('content')
    
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                    <h3 class="page-title">Library</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Library</li>
                        </ul>
                    </div>
                </div>
            </div>

    
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

    
    <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">All Book List</h3>
        </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('addLibrary.page') }}" class="btn btn-primary">Add Book <i class="fas fa-plus"></i> </a>
            </div>
        </div>
    </div>
    

    {{-- Main Table Form  --}}
    <div class="table-responsive">
        <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
            {{-- Table Head --}}
            <thead class="student-thread">
            <tr>
            <th>Book Name</th>
            <th>Language </th>
            <th>Department </th>
            <th>Type </th>
            <th>Status </th>
            <th width="100">Action</th>
            </tr>
            </thead>

            {{-- Sub Table  --}}
        <tbody>
            <tr>
            <td>Socialogy</td>
            <td>Bangla</td>
            <td>Science</td>
            <td>Board Book</td>
            <td>In Stock</td>
            <td>
                <div class="actions">
                    <a href="#" class="btn btn-sm bg-success-light"><i class="feather-eye"></i></a>
                    <a href="#" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
                    <a href="#" class="btn btn-sm bg-danger-light"><i class="feather-delete"></i></a>
                </div>
            </td>
            </tr>
        </tbody>

        </table>
    </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection