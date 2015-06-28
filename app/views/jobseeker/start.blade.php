<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
    Online JOb Portal Career
</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/flexslider.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/responsive.css') }}
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
            <li class="has-submenu">
              <a href="about-us.html">About Us</a>
              <ul>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </li>
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
    <form method="post" action="{{ URL::route('jobseeker-start-post') }}" id="mainForm" class="form-horizontal" role="form">
    {{ Form::hidden('id', $jobseeker->id) }}
    {{ Form::token() }}

  
        <!-- end navbar -->

        <div class="col-md-12">
            <!-- sidebar -->
            

            
            <div id="sidebar-nav" class="col-md-2">
                <ul id="dashboard-menu">
                    <li>
                        <a href="{{ URL::route('home') }}">
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
                            <li><a href="{{ URL::route('jobseeker-profile') }}">View Resume</a></li>
                            <li><a href="{{ URL::route('jobseeker-start') }}">Edit Resume</a></li>
                            <li><a href="{{ URL::route('jobseeker-change-password') }}">Change Password</a></li>
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
                    <ul class="wizard-steps">
                        <li data-target="#step1" class="active"><span class="step">1</span>
                                <a href="{{ URL::route('jobseeker-start') }}"><span class="title">General
                                <br />
                            information</span>
                                    </a></li>
                  
                        <li data-target="#step3"><span class="step">3</span>
                                <a href="{{ URL::route('jobseeker-showStepTwo') }}"><span class="title">Academic
                                <br />
                            Qualification</span>
                                    </a></li>
                        <li data-target="#step4"><span class="step">4</span>
                                <a href="Employment"><span class="title">Employment</span>
                        </a>
                        </li>
                        <li data-target="#step5"><span class="step">5</span>
                                <a href="Others"><span class="title">Others</span>
                                    </a></li>
                        <li data-target="#step6"><span class="step">6</span>
                                <a href="FileUpload"><span class="title">Photograph /
                                <br />
                            CV as pdf format</span>
                                    </a></li>
                    </ul>
                </div>
                <div id="MainBodyContent_divResultSubmitted" style="text-align: center;"></div>
                <div class="step-content">
                    <div class="row form-wrapper">
                        <div class="col-md-6">
                            <div class="field-box">
                                <label>Name(Full name):<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$fullnameText" type="text" value="{{ $jobseeker->fullname }}" id="MainBodyContent_fullnameText" class="form-control fullnameText" />
                            </div>
                      
                            <div class="field-box">
                                <label>Mother's Name:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$mothernameText" value="{{ $jobseeker->mothersname }}" id="MainBodyContent_mothernameText" class="form-control mothernameText" type="text" />
                            </div>
                            <div class="field-box">
                                <label>Father's Name:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$fathernameText" value="{{ $jobseeker->fathersname }}" id="MainBodyContent_fathernameText" class="form-control fathernameText" type="text" />
                            </div>
                            <div class="field-box">
                            {{ Form::label('present', 'Present Address'); }}
                            {{ Form::textarea('present', $jobseeker->present_address, ['size' => '45x5']) }}
                                
                            </div>
                             <div class="field-box">
                            {{ Form::label('permanent', 'Permanent Address'); }}
                            {{ Form::textarea('permanent', $jobseeker->permanent_address, ['size' => '45x5']) }}
                                
                            </div>
                 
                     
                
                            
                        </div>

                        <div class="col-md-6">
                            <div class="field-box">
                                <label>Date of Birth:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$dobText" type="text" value="{{ $jobseeker->dateofbirth }}" id="MainBodyContent_dobText" class="form-control input-datepicker dobText" />
                            </div>
                            <div class="field-box">
                                <label>Email Address:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$emailText" value="{{ $jobseeker->email }}" id="MainBodyContent_emailText" class="form-control emailText" data-toggle="tooltip" data-trigger="focus" title="Please insert a valid email address" data-placement="top" type="text" />
                            </div>
                            <div class="field-box">
                                <label>National ID:</label>
                                <input name="ctl00$MainBodyContent$nationalText" type="text" value="{{ $jobseeker->nationalid }}" id="MainBodyContent_nationalText" class="form-control" />
                            </div>
                          <div class="field-box">
                                <div style="width: 87%;">
                                    <div class="col-md-6" style="margin-left: -15px;">
                                        <label>Gender:<span style="color: #ff0000;"> *</span></label>
                                        <div class="ui-select">
                                        {{ Form::select('ctl00$MainBodyContent$genderText', ['Male'=>'Male', 'Female'=>'Female'],$jobseeker->gender) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Marital Status:<span style="color: #ff0000;"> *</span></label>
                                        <div class="ui-select">
                                        {{ Form::select('ctl00$MainBodyContent$maritalText', ['Single'=>'Single', 'Married'=>'Married'],$jobseeker->marital) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field-box">
                                <div class="col-md-6" style="margin-left: -15px;">
                                    <label>Religion:<span style="color: #ff0000;"> *</span></label>
                                    <div class="ui-select">
                                    {{ Form::select('ctl00$MainBodyContent$ReligionText', ['Islam'=>'Islam', 'Hinduism'=>'Hinduism','Buddhism'=>'Buddhism','Christianity'=>'Christianity','Others'=>'Others'],$jobseeker->religion) }}                                 
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wizard-actions text-center">
                <a disabled class="btn-glow primary btn-prev pull-left" href="#"><i class="icon-chevron-left"></i>Prev</a>
                <input type="submit" name="ctl00$MainBodyContent$SaveGeneralInfo" value="Update Changes" onclick="ConfirmApply();" id="MainBodyContent_SaveGeneralInfo" class="btn-glow success SaveGeneralInfo" />
                <a class="btn-glow primary btn-next pull-right" href="{{ URL::route('jobseeker-showStepTwo') }}">Next <i class="icon-chevron-right"></i></a>
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
  </footer> <!-- end #footer -->
    <!--/.footer-bottom--> 
</div>
    <!-- scripts -->
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
    
    <script src="{{ URL::asset('js/bootstrap.datepicker.js') }}"></script>
        <script src="{{ URL::asset('js/Validate/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::asset('js/Validate/additional-methods.min.js') }}"></script>


    <!-- call this page plugins -->
    <script type="text/javascript">
        $(function () {
            var selectMarital = $(".maritalText option:selected").val();
            if (selectMarital == "Married") {
                $('.spouseDiv').show("slow");
            } else {
                $('.spouseDiv').hide("slow");
            }

            jQuery('.dobText').attr("readonly", "readonly");

            jQuery('.maritalText').change(function () {
                var selectValue = $(".maritalText option:selected").val();
                if (selectValue == "Married") {
                    $('.spouseDiv').show("slow");
                } else {
                    $('.spouseDiv').hide("slow");
                }
            });

            // datepicker plugin
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            $('.SaveGeneralInfo').on("click", function (e) {

                jQuery('form').validate({
                    errorClass: "error"
                });

                jQuery('.fullnameText').rules('add', {
                    required: true
                });
                jQuery('.mothernameText').rules('add', {
                    required: true
                });
                jQuery('.fathernameText').rules('add', {
                    required: true
                });
                jQuery('.dobText').rules('add', {
                    required: true
                });
                jQuery('.emailText').rules('add', {
                    required: true,
                    email: true
                });
                jQuery('.confirmEmailText').rules('add', {
                    required: true,
                    email: true,
                    equalTo: ".emailText"
                });

                var selectValue = $(".maritalText option:selected").val();
                if (selectValue == "Married") {
                    jQuery('.spouseNameText').rules('add', {
                        required: true
                    });
                }

                if ($('form').valid()) {
                    //alert("Hello");
                    $($get("SaveInformation1")).click();
                } else {
                    // alert("Error");
                    e.preventDefault();
                    return false;
                }
            });
        });

        function ConfirmApply() {
            var confirm_profile = document.createElement("INPUT");
            confirm_profile.type = "hidden";
            confirm_profile.name = "confirm_profile";
            if (confirm("Do you want to Change or Update your Profile?")) {
                confirm_profile.value = "Yes";
            } else {
                confirm_profile.value = "No";
            }
            document.forms[0].appendChild(confirm_profile);
        }
    </script>
{{ HTML::script('assets/js/script.js') }}
</body>
</html>

