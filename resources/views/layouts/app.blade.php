<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ url('assets/css/toastr.min.css') }}">
	<script src="{{ url('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ url('assets/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ url('assets/img/login.png') }}" alt="Logo">
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    {{-- javascript file linking --}}
    <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/js/feather.min.js') }}"></script>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>


