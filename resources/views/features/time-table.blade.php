@extends('layouts.master')


@section('content')
    

<div class="main-wrapper">



    <div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Time Table</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Time Table</li>
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
    <h3 class="page-title">Time Table</h3>
    </div>
    <div class="col-auto text-end float-end ms-auto download-grp">
    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
    <a href="add-time-table.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
    </div>
    </div>
    
    <div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
    <thead class="student-thread">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Subject</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Date</th>
    <th class="text-end">Action</th>
    </tr>
    </thead>



    <tbody>
    <tr>
    <td> PRE2309 </td>
    <td> Aaliyah </td>
    <td> 10 </td>
    <td> English </td>
    <td> 10:00 AM </td>
    <td> 01:00 PM </td>
    <td> 23 Apr 2020 </td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2209</td>
    <td> Malynne </td>
    <td>1</td>
    <td>Botony</td>
    <td>10:00 AM</td>
    <td>01:00 PM</td>
    <td>23 Apr 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2213</td>
    <td> Levell Scott </td>
    <td>9</td>
    <td>Biology</td>
    <td>01:00 PM</td>
    <td>04:00 PM</td>
    <td>26 Nov 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2143</td>
    <td>Minnie</td>
    <td>8</td>
    <td>Science</td>
    <td>01:00 PM</td>
    <td>04:00 PM</td>
    <td>18 Sep 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2009</td>
    <td>Lois'A</td>
    <td>7</td>
    <td>History</td>
    <td>01:00 PM</td>
    <td>04:00 PM</td>
    <td>23 Jul 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2431</td>
    <td>Calvin</td>
    <td>2</td>
    <td>Biology</td>
    <td>10:00 AM</td>
    <td>01:00 PM</td>
    <td>15 Oct 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
     </div>
    </td>
    </tr>
    <tr>
    <td>PRE1534</td>
    <td>Vincent</td>
    <td>6</td>
    <td>Botony</td>
    <td>10:00 AM</td>
    <td>01:00 PM</td>
    <td>02 Jun 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>PRE2153</td>
    <td>Kozma'Tatari/td>
    <td>12</td>
    <td>Mathematics</td>
    <td>10:00 AM</td>
    <td>01:00 PM</td>
    <td>23 Apr 2020</td>
    <td class="text-end">
    <div class="actions">
    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
    <i class="feather-eye"></i>
    </a>
    <a href="edit-time-table.html" class="btn btn-sm bg-danger-light">
    <i class="feather-edit"></i>
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








