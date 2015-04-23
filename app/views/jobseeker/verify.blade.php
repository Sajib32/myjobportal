<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Midland Bank e-Recruitment System
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

       <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-overrides.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}">

    <!-- global styles -->
    <link rel="stylesheet" href="http://localhost:8000/css/layout.css">
    <link rel="stylesheet" href="http://localhost:8000/css/elements.css">
    <link rel="stylesheet" href="http://localhost:8000/css/icons.css">

    <!-- libraries -->
    <link rel="stylesheet" href="http://localhost:8000/css/lib/uniform.default.css">
    <link rel="stylesheet" href="http://localhost:8000/css/lib/select2.css">
    <link rel="stylesheet" href="http://localhost:8000/css/lib/bootstrap.datepicker.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="http://localhost:8000/css/new-user.css">

    <!--[if lt IE 9]>
          <script src="js/html5.js"></script>
        <![endif]-->
    <style type="text/css">
        .modalDiv {
            position: fixed;
            top: 0;
            left: 0;
            background-color: black;
            z-index: 99;
            opacity: 0.8;
            filter: alpha(opacity=80);
            -moz-opacity: 0.8;
            min-height: 100%;
            width: 100%;
        }

        .loading {
            font-family: Arial;
            font-size: 10pt;
            border: 2px solid #FF0000;
            width: 200px;
            height: 100px;
            display: none;
            position: fixed;
            background-color: White;
            z-index: 999;
        }

        .error {
            color: Red;
            display: inline-block;
        }
    </style>
    
    <link rel="stylesheet" href="http://localhost:8000/css/smoke/form-wizard.css">
</head>
<body>
    <div id="MainBodyContent_divResultSubmitted" style="font-size: 16px;" class="text-center">
        <div class="alert alert-success alert-dismissable">

            @if(Session::has('global'))
                <p>{{ Session::get('global') }}</p>
            @endif
         <button type="button" class="close" data-dismiss="alert" aria hidden="true">&times;</button>
         <strong>Your FullName:</strong> Md. Monirul Islam<br /> <strong>Tracking Number:</strong> 
        7642027714<br />To Continue, Please Log in</div>
    </div>
        <div class="container">

      <form action="{{ URL::route('jobseeker-sign-in-post') }}" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <div>
        @if(Auth::jobseeker()->check())
            <li><a href="{{ URL::route('jobseeker-sign-out') }}">Signout</a></li>
            <li><a href="{{ URL::route('jobseeker-change-password') }}">Change Password</a></li>
            <p>Hello, {{ Auth::jobseeker()->get()->username }}.</p> 
        @else
            <li><a href="{{ URL::route('jobseeker-sign-in') }}">Jobseeker Sign in</a></li>
            <li><a href="{{ URL::route('jobseeker-create') }}">Jobseeker account creation</a></li>
            <li><a href="{{ URL::route('jobseeker-forgot-password') }}">Forgot password</a></li>
        @endif      
    </div>

    <script src="http://localhost:8000/js/ie-emulation-modes-warning.js"></script>
    <script src="http://localhost:8000/js/ie10-viewport-bug-workaround.js"></script>
                

</body>
</html>

