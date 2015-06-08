<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
    Online JOb Portal Career
</title>
{{ HTML::style('assets/css/seekerfooter.css') }}
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
<div class="container">
    <form method="post" action="{{ URL::route('jobseeker-start-post') }}" id="mainForm" class="form-horizontal" role="form">
    {{ Form::hidden('id', $jobseeker->id) }}
    {{ Form::token() }}

        <!-- navbar -->
        <header class="navbar navbar-inverse" role="banner" style="margin-top: -15px; z-index:999;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="Online JOb Portal Career Page" href="">
                  
                </a>
            </div>
            <ul class="nav navbar-nav pull-right hidden-xs">
                <li class="settings hidden-xs hidden-sm">
                    <a role="button">
                        <span id="informationStatus"></span>
                    </a>
                </li>
                @if(Auth::jobseeker()->check())
                <li class="settings">
                    
                    <a href='profile' role='button'>
                        <span id="userNameLabel">Welcome {{ Auth::jobseeker()->get()->fullname }}</span>
                    </a>
                    
                </li>
                
                <li class="settings">
                    <a href="#" role="button" onclick="confirmLogout()">
                        <span id="logoutNameLabel">Logout</span>
                    </a>
                </li>
                @endif
                <li class="settings">
                    <a href="Faq" role="button">
                        <span id="Label2">FAQ</span>
                    </a>
                </li>

                <li class="settings hidden-xs hidden-sm">&nbsp;</li>
            </ul>
        </header>
        <!-- end navbar -->

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
                    <ul class="wizard-steps">
                        <li data-target="#step1" class="active"><span class="step">1</span>
                                <a href="Default"><span class="title">General
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
                            {{ Form::textarea('present', $jobseeker->present_address, ['size' => '55x5']) }}
                                
                            </div>
                             <div class="field-box">
                            {{ Form::label('permanent', 'Permanent Address'); }}
                            {{ Form::textarea('permanent', $jobseeker->permanent_address, ['size' => '55x5']) }}
                                
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
                                <label>Confirm Email Address:<span style="color: #ff0000;"> *</span></label>
                                <input name="ctl00$MainBodyContent$confirmEmailText" value="{{ $jobseeker->confirm_email }}" id="MainBodyContent_confirmEmailText" class="form-control confirmEmailText" data-toggle="tooltip" data-trigger="focus" title="Please insert a valid email address" data-placement="top" type="text" />
                            </div>
                            <div class="field-box">
                                <label>National ID:</label>
                                <input name="ctl00$MainBodyContent$nationalText" type="text" value="{{ $jobseeker->nationalid }}" id="MainBodyContent_nationalText" class="form-control" />
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
                <a class="btn-glow primary btn-next pull-right" href="Contact">Next <i class="icon-chevron-right"></i></a>
            </div>
        </div>
    </div>


            </div>
            <!-- side right column -->
            <div class="col-md-2" style="position: fixed; right: 0px; top: 0px;">
                
              
                
            </div>
            <!-- end main container -->

        </div>

        <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
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
    <option value="others">Others</option>

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
    </form>
</div>
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
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

</body>
</html>

