<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    Online Job Portal
</title>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/flexslider.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/responsive.css') }}
    {{ HTML::style('assets/css/seekerfooter.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
{{ HTML::style('assets/css/seekerfooter.css') }}
{{ HTML::style('assets/css/font-awesome.min.css') }}
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-overrides.css') }}">
    <!-- global styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/layout.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/elements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/icons.css') }}">

    <!-- libraries -->
    <link rel="stylesheet" href="{{ URL::asset('css/lib/uniform.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/select2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/bootstrap.datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/font-awesome.css') }}">
    <!-- this page specific styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/new-user.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/print.css') }}" media="print">
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

    
        .error {
            color: Red;
            display: inline-block;
        }
    </style>
    
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/form-wizard.css') }}">
    <style type="text/css">
        .datepicker {
            z-index: 1151 !important;
        }
    </style>
</head>
<body>
<div id="main-wrapper"> 
<header id="header" class="header-style-1">
    <div class="header-top-bar">
      <div class="container">

        <!-- Header Language -->
        <div class="header-language clearfix">
          <ul>
            <li class="active"><a href="#">En</a></li>
            <li><a href="#">Fr</a></li>
            <li><a href="#">De</a></li>
            <li><a href="#">It</a></li>
          </ul>
        </div> <!-- end .header-language -->

        <!-- Bookmarks -->
        <a href="#" class="btn btn-link bookmarks">Bookmarks</a>

        <!-- Header Register -->
        <div class="header-register">
          <a href="#" class="btn btn-link">Register</a>
          <div>
            <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="email" class="form-control" placeholder="Email">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Register">
            </form>
          </div>
        </div> <!-- end .header-register -->

        <!-- Header Login -->
        <div class="header-login">
          <a href="#" class="btn btn-link">Login</a>
          <div>
            <form action="#">
              <input type="text" class="form-control" placeholder="Username">
              <input type="password" class="form-control" placeholder="Password">
              <input type="submit" class="btn btn-default" value="Login">
              <a href="#" class="btn btn-link">Forgot Password?</a>
            </form>
          </div>
        </div> <!-- end .header-login -->

      </div> <!-- end .container -->
    </div> <!-- end .header-top-bar -->

    <div class="header-nav-bar">
      <div class="container">

        <!-- Logo -->
        <div class="css-table logo">
          <div class="css-table-cell">
            <a href="index.html">
               {{ HTML::image('/assets/images/header-logo.png', '', array('width'=>'205px','height'=>'50px')) }}
            </a> <!-- end .logo -->
          </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <a href="#" id="mobile-menu-toggle"><span></span></a>

        <!-- Primary Nav -->
        <nav>
          <ul class="primary-nav">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="active has-submenu">
              <a href="jobs.html">Jobs</a>
              <ul>
                <li><a href="jobs.html">Jobs Listings</a></li>
              </ul>
            </li>
            <li>
              <a href="candidates.html">Candidates</a>
            </li>
            <li class="has-submenu">
              <a href="about-us.html">About Us</a>
              <ul>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </li>
            <li><a href="register.html">Register</a></li>
          </ul>
        </nav>
      </div> <!-- end .container -->

      <div id="mobile-menu-container" class="container">
        <div class="login-register"></div>
        <div class="menu"></div>
      </div>
    </div> <!-- end .header-nav-bar -->

    <div class="header-page-title">
      <div class="container">
        <h1>Jobseekers Area</small></h1>
@if(Auth::jobseeker()->check())
        <ul class="breadcrumbs">
          <li><a href="#">Welcome {{ Auth::jobseeker()->get()->fullname }}</a></li>
          <li><a href="{{ URL::route('jobseeker-sign-out') }}">Sign Out</a></li>
        </ul>
@endif
      </div>
    </div>
  </header> <!-- end #header -->
<div class="container">
    <form method="post" action="{{ URL::route('jobseeker-employment-post') }}" id="mainForm" class="form-horizontal" role="form">
    {{ Form::token() }}


        <div class="col-md-12">
            <!-- sidebar -->
            

            
            <div id="sidebar-nav" class="col-md-2">
                <ul id="dashboard-menu">
                    <li>
                        <a href="JobList">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" href="#">
                            <i class="icon-group"></i>
                            <span>Profile</span>
                            <i class="icon-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="Profile">View Resume</a></li>
                            <li><a href="Default">Edit Resume</a></li>
                            <li><a href="ChangePassword">Change Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="confirmLogout()">
                            <i class="icon-reply"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- end sidebar -->

            <div class="content col-md-8">

                
    <div id="pad-wrapper">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div id="fuelux-wizard" class="wizard row">
                    ﻿ <ul class="wizard-steps">
    <li data-target="#step1" class="active"><span class="step">1</span>
        <a href="Default">
        <span class="title">General
        <br />
        information</span>
            </a>
    </li>
    <li data-target="#step3" class="active"><span class="step">3</span>
        <a href="Academic">
        <span class="title">Academic
        <br />
        Qualification</span>
            </a>
    </li>
    <li data-target="#step4" class="active"><span class="step">4</span>
        <a href="Employment">
            <span class="title">Employment</span>
            </a>
    </li>
    <li data-target="#step5"><span class="step">5</span>
        <a href="Others">
        <span class="title">Others</span>
            </a>
    </li>
    <li data-target="#step6"><span class="step">6</span>
        <a href="FileUpload">
        <span class="title">Photograph /
        <br />
        CV as pdf format</span>
            </a>
    </li>
</ul>
                </div>
                <div id="MainBodyContent_divResultSubmitted"></div>
                <div class="step-content">
                    <div class="row form-wrapper">
                        <div class="col-md-12">
                            <h4>Employment History</h4>
                            <br />

                            @if($employment->isEmpty())
                                <span id="MainBodyContent_noResultLabel">Currently no data exist! Please click on the following button to add your employment history.</span>
                            @else
                            <div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_EmploymentGridView" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Company Name</th>
            <th scope="col">Position</th>
            <th scope="col">Department</th>
            <th scope="col">Responsibilities</th>
            
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($employment as $e)
        <tr>
            <td>{{ $e->company_name }} <br/> <strong>Location:</strong> {{ $e->company_location }}
            </td>
            <td>{{ $e->position_held }}</td>
            <td>{{ $e->department }}</td>
            <td>{{ $e->responsibilities }}</td>
          
            <td>
                {{ $e->datefrom }}
            </td>
            <td>
                {{ $e->dateto }}
            </td>
            <td>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="{{ URL::route('employment-edit', array($e->id)) }}"><i class="icon-edit icon-2x"></i></a>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="{{ URL::route('employment-del', array($e->id)) }}"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
                            
                            <br />
                            <br />
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#educationModal">
                                Add Experience
                            </button>
                        </div>
                    </div>

                    <!-- education Modal-->
                    <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="educationLabel">Entry Form - Employment History</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row form-wrapper">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <label>Company Name:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$CompanyNameText" id="MainBodyContent_CompanyNameText" class="form-control CompanyNameText" type="text" />
                                            </div>
                          
                                            <div class="field-box">
                                                <label>Company Location:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$CompanyLocationText" id="MainBodyContent_CompanyLocationText" class="form-control CompanyLocationText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Position Held:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$PositionHeldText" id="MainBodyContent_PositionHeldText" class="form-control PositionHeldText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Department/Division:</label>
                                                <input name="ctl00$MainBodyContent$DepartmentText" id="MainBodyContent_DepartmentText" class="form-control" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Responsibilities:</label>
                                                <textarea name="ctl00$MainBodyContent$responsibilitiesText" rows="2" cols="20" id="MainBodyContent_responsibilitiesText" class="form-control" type="text" style="width: 400px;">
</textarea>
                                            </div>
                                            <div class="field-box">
                                                <div class="col-sm-5" style="padding: 0px;">
                                                    <label style="width: 103px;">From:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$fromDateText" id="MainBodyContent_fromDateText" class="form-control fromDateText input-datepicker" type="text" style="width: 80%" />
                                                </div>
                                                <div class="col-sm-5 toDateDiv" style="padding: 0px;">
                                                    <label style="width: 103px;">To:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$toDateText" id="MainBodyContent_toDateText" class="form-control toDateText input-datepicker" type="text" style="width: 80%" />
                                                </div>
                                            </div>
                                            <div class="field-box">
                                                <label style="width: 103px;">Continuing :</label>
                                                <span class="continueText"><input id="MainBodyContent_continueText" type="checkbox" name="ctl00$MainBodyContent$continueText" /></span>
                                            </div>
                                            <br />
                                            
                                            
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="ctl00$MainBodyContent$save_employment_info" value="Save changes" id="MainBodyContent_save_employment_info" class="btn btn-primary btnEmploymentInfo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wizard-actions text-center">
                    <a style="margin-left: 15px;" href="Academic" class="btn-glow primary btn-prev pull-left"><i class="icon-chevron-left"></i>Prev</a>
                    
                    <a class="btn-glow primary btn-next pull-right" href="Others" data-last="Finish">Next <i class="icon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>


            </div>
            <!-- side right column -->
            <div class="col-md-2" style="position: fixed; right: 0px; top: 0px;">
                
                
            </div>
            <!-- end main container -->

        </div>
    </form>
</div>
</div>
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-4">
          <div class="widget">
            <div class="widget-content">
              {{ HTML::image('/assets/img/Logo.jpg', '', array('width'=>'205px','height'=>'50px')) }}
              <p>This is the site where you will get everything about jobs</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-4">
          <div class="widget">
            <h6 class="widget-title">Navigation</h6>

            <div class="widget-content">
              <div class="row">
                <div class="col-xs-6 col-sm-12 col-md-6">
                  <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Candidates</a></li>
                    <li><a href="#">Partners</a></li>
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-12 col-md-6">
                  <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-2">
          <div class="widget">
            <h6 class="widget-title">Follow Us</h6>

            <div class="widget-content">
              <ul class="footer-links">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-2">
          <div class="widget">
            <h6 class="widget-title">Popular Jobs</h6>

            <div class="widget-content">
              <ul class="footer-links">
                <li><a href="#">Web Developer</a></li>
                <li><a href="#">Web Designer</a></li>
                <li><a href="#">UX Engineer</a></li>
                <li><a href="#">Account Manager</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <p>&copy; Copyright 2014 <a href="#">Careers</a> | All Rights Reserved | Powered by <a href="#">UOU Apps</a></p>

        <ul class="footer-social">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-linkedin"></a></li>
          <li><a href="#" class="fa fa-google-plus"></a></li>
          <li><a href="#" class="fa fa-pinterest"></a></li>
          <li><a href="#" class="fa fa-dribbble"></a></li>
        </ul>
      </div>
    </div>
  </footer>
    <!-- scripts -->
    </div>
    <script src="{{ URL::asset('js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme.js') }}"></script>

    <script type="text/javascript">
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 1) {
                $('.navbar-inverse').addClass('fixed');
            }
            else {
                $('.navbar-inverse').removeClass('fixed');
            }
        });

        function confirmLogout() {
            if (confirm("Do you want to Logout?")) {
                location.href = "Logout";
            }
        }

        // Chat window

        jQuery('.chatItemName').change(function () {
            var selectValue = $(".chatItemName option:selected").val();
            if (selectValue == "others") {
                $('.chatOtherDiv').show("slow");
            } else {
                $('.chatOtherDiv').hide("slow");
            }
        });

        jQuery('.btnChat').click(function (e) {
            var selectValue = $(".chatItemName option:selected").val();
            if (selectValue == "others") {
                jQuery('.otherItemName').rules('add', {
                    required: true
                });
            }

            jQuery('.chatEmail').rules('add', {
                required: true
            });

            jQuery('.chatMessage').rules('add', {
                required: true
            });

            if ($('form').valid()) {
                //alert("Hello");
                $($get("btnChat")).click();
            } else {
                // alert("Error");
                e.preventDefault();
                return false;
            }
        });

        // End chat window

        function ShowProgress() {
            setTimeout(function () {
                var modalDiv = $('<div />');
                modalDiv.addClass("modalDiv");
                $('body').append(modalDiv);
                var loading = $(".loading");
                loading.show();
                var top = Math.max($(window).height() / 2 - loading[0].offsetHeight / 2, 0);
                var left = Math.max($(window).width() / 2 - loading[0].offsetWidth / 2, 0);
                loading.css({ top: top, left: left });
            }, 200);
        }
    </script>

    <!-- scripts -->
    <script src="{{ URL::asset('js/fuelux.wizard.js') }}"></script>
    <script src="{{ URL::asset('js/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.datepicker.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.uniform.min.js') }}"></script>
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/Validate/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/Validate/additional-methods.min.js') }}"></script>

    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {
            jQuery('.CompanyBusinessText').change(function () {
                var selectValue = $(".CompanyBusinessText option:selected").val();
                if (selectValue == 81) {
                    $('.companyOthersDiv').show("slow");
                } else {
                    $('.companyOthersDiv').hide("slow");
                }
            });


            $(".select2").select2({
                placeholder: "Select a Category"
            });

            // datepicker plugin
            jQuery('.fromDateText').attr("readonly", "readonly");
            jQuery('.toDateText').attr("readonly", "readonly");
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            $('input[type="checkbox"]').on('change', function () {
                if ($(this).prop('checked')) {
                    //$('.toDateText').datepicker({ dateFormat: "dd M yy" }).datepicker("setDate", new Date());
                    $('.toDateDiv').hide("slow");
                } else {
                    $('.toDateDiv').show("slow");
                }
            });

            $('.btnEmploymentInfo').click(function (e) {

                jQuery('form').validate({
                    errorClass: "error"
                });

                jQuery('.CompanyNameText').rules('add', {
                    required: true
                });
                jQuery('.CompanyLocationText').rules('add', {
                    required: true
                });
                jQuery('.PositionHeldText').rules('add', {
                    required: true
                });
                jQuery('.fromDateText').rules('add', {
                    required: true
                });
                jQuery('.expCategory').rules('add', {
                    required: true
                });

                if ($('input[type="checkbox"]').prop('checked')) {
                    $('.toDateDiv').hide("slow");
                } else {
                    jQuery('.toDateText').rules('add', {
                        required: true
                    });
                }


                if ($('form').valid()) {
                    //alert("Hello");
                    $($get("save_employment_info")).click();
                } else {
                    // alert("Error");
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>
    <script type="text/javascript">
        function Confirm() {
            var confirm_value = document.createElement("INPUT");
            confirm_value.type = "hidden";
            confirm_value.name = "confirm_value";
            if (confirm("Do you want to Delete?")) {
                confirm_value.value = "Yes";
            } else {
                confirm_value.value = "No";
            }
            document.forms[0].appendChild(confirm_value);
        }
    </script>
{{ HTML::script('assets/js/script.js') }}
</body>
</html>

