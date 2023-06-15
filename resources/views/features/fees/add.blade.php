@extends('layouts.master')
@section('content')

<div class="main-wrapper">




<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Add Fees</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('fees.page') }}">Fees</a></li>
                <li class="breadcrumb-item active">Add Fees</li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card">
        <div class="card-body">


        <form action="{{ route('create.fees') }}" method="POST">
            @csrf
        <div class="row">
            <div class="col-12">
            <h5 class="form-title"><span>Fees Information</span></h5>
            </div>


            {{-- 1st Section --}}
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Fees ID</label>
                    <input name="fees_id" type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control">
                </div>
            </div>


            {{-- 2st Section --}}
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Class</label>
                    <select name="class" class="form-control select">
                        <option>Select Type</option>
                        <option>Class 6</option>
                        <option>Class 7</option>
                        <option>Class 8</option>
                        <option>Class 9</option>
                        <option>Class 10</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                <label>Shift</label>
                    <select name="shift" class="form-control select">
                        <option>Select Type</option>
                        <option>Day Shift</option>
                        <option>Night Shift</option>
                    </select>
                </div>
            </div>


            {{-- 3rd Section --}}
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control select">
                        <option>Select Class</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Custom</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Total Amount</label>
                    <input name="amount" type="text" class="form-control">
                </div>
            </div>


            {{-- 4th Section --}}
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Paid Amount</label>
                    <input name="paid" type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Due Amount</label>
                    <input name="due" type="text" class="form-control">
                </div>
            </div>


            {{-- 5th Section --}}
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Start Date</label>
                    <input name="sDate" type="date" class="form-control">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>End Date</label>
                    <input name="eDate" type="date" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Now</button>
            </div>

        </div>
    </form>





        </div>
        </div>
    </div>
</div>




</div>
</div>

</div>


@endsection