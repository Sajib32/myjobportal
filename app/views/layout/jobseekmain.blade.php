<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Midland Bank e-Recruitment System
</title>
<!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-overrides.css') }}">

    <!-- global styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/elements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icons.css') }}">

    <!-- libraries -->
    <link rel="stylesheet" href="{{ URL::asset('css/lib/uniform.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/select2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/bootstrap.datepicker.css') }}">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/new-user.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/smoke/smoke.css') }}">

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
    
</head>
<body>
    <form method="post" action="Career.aspx" id="mainForm" class="form-horizontal" role="form">
        <!-- navbar -->
        <header class="navbar navbar-inverse" role="banner" style="margin-top: -15px; z-index: 999;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <ul class="nav navbar-nav pull-right hidden-xs">
                <li class="settings hidden-xs hidden-sm">
                    <a role="button">
                        <span id="informationStatus"></span>
                    </a>
                </li>
                <li class="settings">
                    
                    <a href="{{ URL::route('jobseeker-start') }}" role='button'>
                        <span id="Label1">Create New Account</span>
                    </a>
                    
                </li>
                <li id="loginDiv" class="settings">
                    <a href="#" role="button">
                        <span id="loginNameLabel" data-toggle="modal" data-target="#educationModal">Login</span>
                    </a>
                </li>
                
                <li class="settings">
                    <a href="Faq.aspx" target="_blank" role="button">
                        <span id="Label2">FAQ</span>
                    </a>
                </li>

                <li class="settings hidden-xs hidden-sm">&nbsp;</li>
            </ul>
        </header>
        <!-- end navbar -->

        <div class="col-md-12">
            <!-- sidebar -->
            
            <div id="sidebar-nav" class="col-md-2" style="padding-top: 0px;">
                
            </div>
            
            <!-- end sidebar -->

            <div class="content col-md-8">
                
    <div id="pad-wrapper" class="new-user">
        <!-- header -->
        <div class="row header" style="margin-bottom: 20px;">
            <div class="col-md-12">
                <!--<marquee behavior="scroll" direction="left"><h3 style="color: #ED1C24;">Site Under Construction</h3></marquee>-->
                </div>
                <div class="col-md-12">
                <h3 class="name">Welcome to Midland Bank e-Recruitment System</h3>
            </div>
        </div>

        <div class="row profile">
            <div class="col-md-12 bio" style="border-right: none; box-shadow: none;">
                <div class="profile-box" style="width: 100%;">

                    <div class="col-md-12 section" style="margin-bottom: 60px; text-align: justify;">
                        <p style="color: #000000; font-size: 14px;">Midland Bank Ltd., a new generation commercial bank driven by the vision to be the country’s best financial institution with a diverse array of carefully tailored customer friendly products and providing customized financial services in every aspect of the Bank’s operations is looking for highly motivated, skilled, confident, enthusiastic and talented individuals who are career oriented and enjoys working in a dynamic environment where their efforts are appreciated and rewarded.</p>
                    </div>

                    <h4>All Posted Jobs <span id="MainBodyContent_noOfJobs"></span></h4>

                    <br />
                    <div id="MainBodyContent_divResultSubmitted"><div class='alert alert-info text-center'>No Jobs Posted Yet!</div></div>
                    <br />
                    <div>

</div>
                    <br />
                    <br />
                    <span id="MainBodyContent_statusLabel" class="error"></span>
                </div>
            </div>
        </div>
    </div>

            </div>
            <!-- side right column -->
            <div class="col-md-2" style="position: fixed; right: 0px; top: 0px;">
                
                
                <br />

            </div>
            <!-- end main container -->

        </div>

        <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="educationLabel">Signin With your existing Applicant Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-wrapper">
                            <div class="col-md-12">
                                <div class="field-box">
                                    <label style="width: 115px;">Email Address:</label>
                                    <input name="ctl00$emailFieldText" type="text" id="emailFieldText" class="form-control" oncopy="return false" onpaste="return true" oncut="return false" autocomplete="off" placeholder="E-mail address" style="width: 400px;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Password:</label>
                                    <input name="ctl00$passwordFieldText" type="password" id="passwordFieldText" class="form-control" autocomplete="off" placeholder="Your password" style="width: 400px;" />
                                </div>

                                <br />
                                <div class="field-box">
                                    <a href="ForgotPassword.aspx" class="forgot">Forgot password?</a>
                                    <div class="remember">
                                        <input id="remember-me" type="checkbox" />
                                        <label style="width: 115px;" for="remember-me">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" name="ctl00$topSigninBtn" value="Log in" id="topSigninBtn" class="btn btn-primary btn-sm pull-left" />
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="chatModalLabel" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="chatHr">Chat with HR</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-wrapper">
                            <div class="col-md-12">
                                <div class="field-box">
                                    <label style="width: 115px;">Subject:</label>
                                    <div class="ui-select" style="width: 78%;">
                                        <select name="ctl00$chatItemName" id="chatItemName" class="chatItemName">
	<option value="I Can’t Login The Career Site">I Can’t Login The Career Site</option>
	<option value="I Can’t Create Login ID">I Can’t Create Login ID</option>
	<option value="I Can’t Apply By using the Web Site">I Can’t Apply By using the Web Site</option>
	<option value="I Forgotten Entire Login Information">I Forgotten Entire Login Information</option>
	<option value="I Can’t Edit My Resume">I Can’t Edit My Resume</option>
	<option value="Others">Others</option>

</select>
                                    </div>
                                </div>
                                <div class="field-box chatOtherDiv" style="display: none;">
                                    <label style="width: 115px;">Please specify:</label>
                                    <input name="ctl00$otherItemName" type="text" id="otherItemName" class="form-control otherItemName" placeholder="Specify" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Email Address:</label>
                                    <input name="ctl00$chatEmail" type="text" id="chatEmail" class="form-control chatEmail" placeholder="E-mail address" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Contact Number</label>
                                    <input name="ctl00$chatContact" type="text" id="chatContact" class="form-control chatContact" placeholder="Contact Number" style="width: 100%;" />
                                </div>
                                <div class="field-box">
                                    <label style="width: 115px;">Message:</label>
                                    <textarea name="ctl00$chatMessage" rows="2" cols="20" id="chatMessage" class="form-control chatMessage" placeholder="" style="width: 100%;">
</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" name="ctl00$btnChat" value="Submit" id="btnChat" class="btn btn-primary btn-sm pull-left btnChat" />
                    </div>
                </div>
            </div>
        </div>


        <footer class="col-md-12" style="background: #ff0000; clear: both; padding: 10px; color: #FFFFFF; position: fixed; bottom: 0px;">
            <div class="col-md-6">
                2014 © <a style="color: #FFFFFF" title="Midland Bank Ltd. official website" href="http://www.midlandbankbd.net/" target="_blank">Midland Bank Ltd.</a> All Rights Reserved. 
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="http://www.midlandbankbd.net/terms_of_service" target="_blank">Terms of Sesrvice</a>
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="GuideLine.aspx" target="_blank">How to Apply</a>
                &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="#">Feedback</a>
            </div>
            <div class="col-md-6 text-right">Powered by IT Division of Midland Bank Limited</div>
            <div class="clearfix"></div>
        </footer>
    </form>
    <!-- scripts -->
    <script src="{{ URL::asset('js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme.js') }}"></script>
    <script src="{{ URL::asset('css/smoke/smoke.min.js') }}"></script>

    <script type="text/javascript">
        function showSmokeAlert() {
            smoke.alert('Thanks for submitting your request to Midland Bank e-Recruitment System. We will contact you shortly.', {}, function () { });
        }
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
                location.href = "Logout.aspx";
            }
        }

        // Chat window

        jQuery('.chatItemName').change(function () {
            var selectValue = $(".chatItemName option:selected").val();
            if (selectValue == "Others") {
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
    

</body>
</html>
