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
    
    <style type="text/css">
        .table td {
            vertical-align: top !important;
        }

        /*#infoTable thead > tr > th, #infoTable tbody > tr > th, #infoTable tfoot > tr > th, #infoTable thead > tr > td, #infoTable tbody > tr > td, #infoTable tfoot > tr > td {
            border-top: 0px solid #DDDDDD;
            padding: 2px;
        }*/
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
    <form method="post" action="Profile" id="mainForm" class="form-horizontal" role="form">
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
                            <li><a href="#">Edit Resume</a></li>
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

                
    <div id="pad-wrapper" class="user-profile" style="margin-top: 0px; padding: 10px;">
        <!-- header -->
     
       
       
        <div class="row profile">
            <!-- bio, new note & orders column -->
            <div class="col-md-12 bio printdiv" style="border: none; box-shadow: none;">
                <div class="profile-box" style="border: none; margin-top: -50px; padding-top: 0px;">
                    <div class="section">
                        <div style="margin-top: 40px; width: 100%; clear: both;">
                            <div style="width: 50%; float: left;">
                                <h3 class="name" style="font-family: 'Times New Roman'">
                                    <span id="MainBodyContent_nameHolder">Md. Monirul Islam</span>
                                </h3>
                            </div>
                            <div style="width: 50%; float: right; text-align: right; padding-top: 5px;">
                                
                               
                                
                            </div>
                        </div>
                        <div>

</div>
                        <span id="MainBodyContent_noAddressInfo"></span>
                    </div>
                    <!-- biography -->
                    <div class="section">
                        <h4 style="clear: both;">Personal Details</h4>
                        <div>
	<table class="display table" cellspacing="0" align="Left" id="MainBodyContent_GridViewGeneral" style="border-collapse:collapse;">
		<tr>
			<td>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Full Name:</strong></div>        <div style="width: 400px;">{{ $jobseeker->fullname }}</div>
                                        
                                        
                                        <div style="width: 150px; clear: both; float:left;"><strong>Mother's Name:</strong></div>    <div style="width: 400px;">{{ $jobseeker->mothersname }}</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Father's Name:</strong></div>    <div style="width: 400px;">{{ $jobseeker->fathersname }}</div>
                                        
                                        <div style="width: 150px; clear: both; float:left;"><strong>Gender:</strong> </div>          <div style="width: 400px;">{{ $jobseeker->gender }}</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Religion:</strong></div>         <div style="width: 400px;">{{ $jobseeker->religion }}</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Date of Birth:</strong></div>     <div style="width: 400px;">{{ $jobseeker->dateofbirth }}</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>National ID:</strong> </div>     <div style="width: 400px;">{{ $jobseeker->nationalid }}</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Home District:</strong> </div>   <div style="width: 400px;">Sherpur</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Marital Status:</strong></div>   <div style="width: 400px;">{{ $jobseeker->marital }}</div>
                                    </td>
		</tr>
	</table>
</div>
                    </div>
                  
              
                
                    <div class="section">
                        <h4 style="clear: both;">Academic Qualification</h4>
                        <div>
	<table class="display table table-hover table-bordered table-striped AcademicGridView" cellspacing="0" align="Right" id="MainBodyContent_AcademicGridView" style="border-collapse:collapse;">
		<tr>
			<th scope="col">Exam Title</th>
            <th scope="col">Concentration/ Major/ Group</th>
            <th scope="col">Institute Name</th>
            <th scope="col" style="width:150px;">Result</th>
            <th scope="col">Duration</th>
            <th scope="col">Achievement</th>
		</tr>
        @foreach($qualification as $q)
        <tr>
			<td>{{ $q->exam_title }}</td>
            <td style="width:100px;">{{ $q->major }}</td>
            <td>{{ $q->institute_name }}</td>
            @if($q->result == 'First Division' || $q->result == 'Second Division' || $q->result == 'Third Division')
            <td>
            <strong>{{ $q->result }}/class: </strong><br/>
                                        Marks: {{ $q->marks }}
                                        <br/> <strong>Year of Passing: </strong>{{ $q->year_of_passing }}
            </td><td>{{ $q->duration }}</td><td style="width:50px;">&nbsp;</td>
            @else
            <td>
             <strong>Grade: </strong><br/>
                                        CGPA {{ $q->marks }} (Out of Scale {{ $q->result }})
                                        <br/> <strong>Year of Passing: </strong>{{ $q->year_of_passing }}
                                    </td><td>{{ $q->duration }}</td><td style="width:50px;">&nbsp;</td>
            @endif   
            
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noAcademicLabel"></span>
                        <br />

                        <h4 style="clear: both;">Professional Qualification</h4>
                        <div>
	<table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewProfessional" style="border-collapse:collapse;">
		<tr>
			<th scope="col">Certification</th>
            <th scope="col">Institute</th>
            <th scope="col">Location</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
		</tr>
        @foreach($proqua as $p)
        <tr>
			<td> {{ $p->certification }}</td>
            <td>{{ $p->institute }}</td>
            <td>{{ $p->location }}</td>
            <td>{{ $p->from }}</td>
            <td>{{ $p->to }}</td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noProfessional"></span>
                        <br />

                        <h4 style="clear: both;">Training Information</h4>
                        <div>
	<table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewTraining" style="border-collapse:collapse;">
		<tr>
			<th scope="col">Title</th>
            <th scope="col">Topics</th>
            <th scope="col">Institute</th>
            <th scope="col">Country</th>
            <th scope="col">Location</th>
            <th scope="col">Year</th>
            <th scope="col">Duration</th>
		</tr>
        @foreach($training as $t)
        <tr>
			<td>{{ $t->title }}</td>
            <td>{{ $t->topics }}</td>
            <td>{{ $t->institute }}</td>
            <td>{{ $t->location }}</td>
            <td>{{ $t->country }}</td>
            <td>{{ $t->year }}</td>
            <td>{{ $t->duration }}</td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noTraining"></span>

                        <br />
                        <h4 style="clear: both;">Employment History</h4>
                        <div>
	<table class="display table" cellspacing="0" align="Left" id="MainBodyContent_EmploymentGridView" style="border-collapse:collapse;">
		@foreach($employment as $e)
        <tr>
			<td>
                <p style='color: #000; font-size: 14px; text-decoration: underline; margin: 0px;'>
                {{ $e->position_held }} ({{ $e->datefrom }} - 
                {{ $e->dateto }})</p>
                <br /><strong>Name of Company: {{ $e->company_name }}</strong>
                <br /><strong>Department:</strong> {{ $e->department }}
                <br /><strong>Location:</strong> {{ $e->company_location }}
                <br /><strong>Responsibilities:</strong> <br />{{ $e->responsibilities }}
            </td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noEmploymentLabel"></span>
                    </div>
                    <br />
                    <div class="section">
                        <h4 style="clear: both;">Fields of Specialization and Extracurricular Activites</h4>
                        <div>
	<table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_SpecialGridView" style="border-collapse:collapse;">
		<tr>
			<th scope="col">Category Name</th>
            <th scope="col">Skill Description</th>
            <th scope="col">Extracurricular Activities</th>
		</tr>
        @foreach($spec as $s)
        <tr>
			<td>{{ $s->category_name }}</td>
            <td>{{ $s->skill_desc }}</td>
            <td>{{ $s->extra_curri }}</td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noResultLabel"></span>
                        <br />
                        <h4 style="clear: both;">Language</h4>
                        <div>
	<table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewLanguage" style="border-collapse:collapse;">
		<tr>
			<th scope="col">Title</th>
            <th scope="col">Reading</th>
            <th scope="col">Writing</th>
            <th scope="col">Speaking</th>
		</tr>
        @foreach($language as $l)
        <tr>
			<td>{{ $l->title }}</td>
            <td>{{ $l->reading }}</td>
            <td>{{ $l->writting }}</td>
            <td>{{ $l->speaking }}</td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noLanguage"></span>
                        <br />
                        <h4 style="clear: both;">References</h4>
                        <div>
	<table class="display table" cellspacing="0" align="Right" id="MainBodyContent_GridViewReference" style="border-collapse:collapse;">
		@foreach($reference as $r)
        <tr>
			<td>
                <div style="width: 120px; clear: both; float:left;">Name:            </div><div style="width: 400px;">{{ $r->name }}</div>
                <div style="width: 120px; clear: both; float:left;">Organigation:    </div><div style="width: 400px;">{{ $r->organization }}</div>
                <div style="width: 120px; clear: both; float:left;">Address:         </div><div style="width: 400px;">{{ $r->designation }}</div>
                
                
                <div style="width: 120px; clear: both; float:left;">Mobile:          </div><div style="width: 400px;">{{ $r->address }}</div>
                
                <div style="width: 120px; clear: both; float:left;">Relation:        </div><div style="width: 400px;">{{ $r->mobile }}</div>
            </td>
		</tr>
        @endforeach
	</table>
</div>
                        <span id="MainBodyContent_noReference"></span>
                    </div>
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
  </footer> <!-- end #footer -->
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
    
    <script type="text/javascript" src="js/Validate/jquery.jqprint.js"></script>
    <script type="text/javascript">
        $(function () {
            //$("#addDiv").height($("#addResult").height() + 15 + "px");
            $(".hrefPrint").click(function () {
                // Print the DIV.
                $(".printdiv").jqprint();
                return (false);
            });
        });

        function ConfirmEditProfile() {
            var confirm_profile = document.createElement("INPUT");
            confirm_profile.type = "hidden";
            confirm_profile.name = "confirm_profile";
            if (confirm("Do you want to Edit your Profile?")) {
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

