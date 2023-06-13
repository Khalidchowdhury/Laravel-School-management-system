@extends('layouts.master')
@section('content')
    

<div class="main-wrapper">

    <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                <h3 class="page-title">Fees</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Fees</li>
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
                                        <h3 class="page-title">Fees</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                        <a href="{{ route('add.fees') }}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Amount</th>
                                            <th>Payment</th>
                                            <th>Due</th>
                                            <th>Last Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td> PRE1234 </td>
                                            <td> Khalid Hasan </td>
                                            <td> 5 </td>
                                            <td> 2500 ৳</td>
                                            <td> 1200 ৳</td>
                                            <td> 1300 ৳ </td>
                                            <td> 28 Apr 2020 </td>
                                            <td>
                                                <div class="actions">
                                                <a href="{{ route('view.fees') }}" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                                </a>
                                                <a href="{{ route('edit.fees') }}" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm bg-danger-light">
                                                <i class="feather-delete"></i>
                                                </a>
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