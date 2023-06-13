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
                                        <a href="{{ route('fees.page') }}" class="btn btn-primary">Back </a>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>ID</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><b> Name </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Class </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Shift </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Gender </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Total Amount </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Paid Amount </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Due Ampont</b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> Start Date </b></td>
                                            <td> PRE1234 </td>
                                        </tr>
                                        <tr>
                                            <td><b> End Date </b></td>
                                            <td> PRE1234 </td>
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