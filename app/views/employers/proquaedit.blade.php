<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    Midland Bank e-Recruitment System
</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-overrides.css') }}">

    <!-- global styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/layout.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/elements.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/icons.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/lib/font-awesome.css') }}">

    <!-- libraries -->
    <link rel="stylesheet" href="{{ URL::asset('css/lib/uniform.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/select2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/bootstrap.datepicker.css') }}">


    <!-- this page specific styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/new-user.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/print.css') }}" media="print">


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
    
<link rel="stylesheet" media="screen" href="{{ URL::asset('css/compiled/form-wizard.css') }}">
    <style type="text/css">
        .datepicker {
            z-index: 1151 !important;
        }
    </style>
</head>
<body>
    <form method="post" action="{{ URL::route(jobseeker-proquaedit) }}" id="mainForm" class="form-horizontal" role="form">
         {{ Form::hidden('id', $proqualification->id) }}
        {{ Form::token() }}
        <!-- navbar -->
        <header class="navbar navbar-inverse" role="banner" style="margin-top: -15px;">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="Midland Bank e-Recruitment Home Page" href="Career.aspx">
                    <img src="img/mid/logo_rr.png" style="height: 48px; width: auto;" alt="logo" />
                    <img src="img/mid/logo.png" style="height: 48px; width: auto;" alt="logo" />
                </a>
            </div>
            <ul class="nav navbar-nav pull-right hidden-xs">
                <li class="settings hidden-xs hidden-sm">
                    <a role="button">
                        <span id="informationStatus"></span>
                    </a>
                </li>
                <li class="settings">
                    
                    <a href='Profile.aspx' role='button'>
                        <span id="userNameLabel">Welcome Md. Monirul Islam</span>
                    </a>
                    
                </li>
                
                <li class="settings">
                    <a href="#" role="button" onclick="confirmLogout()">
                        <span id="logoutNameLabel">Logout</span>
                    </a>
                </li>
                
                <li class="settings">
                    <a href="Faq.aspx" role="button">
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
                        <a href="JobList.aspx">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-inbox"></i>
                            <span>Inbox(0)</span>
                        </a>
                    </li>
                    <li>
                        <a href="CVStatus.aspx">
                            <i class="icon-signal"></i>
                            <span>Resume Status</span>
                        </a>
                    </li>
                    <li>

                        <a href="AdmitCard.aspx">
                            <i class="icon-cloud-download"></i>
                            <span>Admit Card</span>
                        </a>

                    </li>
                    <li>
                        <a href="AppliedJobs.aspx">
                            <i class="icon-tags"></i>
                            <span>Job Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="JobList.aspx">
                            <i class="icon-tasks"></i>
                            <span>Available Jobs</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" href="#">
                            <i class="icon-group"></i>
                            <span>Profile</span>
                            <i class="icon-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="Profile.aspx">View Resume</a></li>
                            <li><a href="Default.aspx">Edit Resume</a></li>
                            <li><a href="ChangePassword.aspx">Change Password</a></li>
                            <li><a href="#">Notification</a></li>
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
                    ﻿ <ul class="wizard-steps">
    <li data-target="#step1" class="active"><span class="step">1</span>         <a href="Default.aspx">         <span class="title">General
        <br />
        information</span>             </a>     </li>
    <li data-target="#step2" class="active"><span class="step">2</span>         <a href="Contact.aspx">         <span class="title">Contact
        <br />
        information</span>             </a>     </li>
    <li data-target="#step3" class="active"><span class="step">3</span>         <a href="Academic.aspx">         <span class="title">Academic
        <br />
        Qualification</span>             </a>     </li>
    <li data-target="#step4"><span class="step">4</span>         <a href="Employment.aspx">             <span class="title">Employment</span>
            </a>
    </li>
    <li data-target="#step5"><span class="step">5</span>         <a href="Others.aspx">         <span class="title">Others</span>             </a>     </li>
    <li data-target="#step6"><span class="step">6</span>         <a href="FileUpload.aspx">         <span class="title">Photograph /
        <br />
        CV as pdf format</span>             </a>     </li>
</ul><div id="MainBodyContent_divResultSubmitted"></div>
                    <h4>Update Professional Qualification</h4>
                    <div class="step-content">
                        <div class="row form-wrapper">
                        @foreach($proqualification as $proqua)
                            <div class="col-md-8">
                                <input type="hidden" name="ctl00$MainBodyContent$ProfessionalHiddenInput" id="MainBodyContent_ProfessionalHiddenInput" value="9631" />
                                <div class="field-box">
                                    <label>Certification:</label>
                                    <input name="ctl00$MainBodyContent$certificateText" value="{{ $proqua->certification }}" id="MainBodyContent_certificateText" class="form-control certificateText" type="text" />
                                </div>
                                <div class="field-box">
                                    <label>Institute :</label>
                                    <input name="ctl00$MainBodyContent$instituteText" value="{{ $proqua->institute }}" id="MainBodyContent_instituteText" class="form-control instituteText" type="text" />
                                </div>
                                <div class="field-box">
                                    <label>Location :</label>
                                    <input name="ctl00$MainBodyContent$locationText" value="{{ $proqua->location }}" id="MainBodyContent_locationText" class="form-control" type="text" />
                                </div>
                                <div class="field-box">
                                    <label>From :</label>
                                    <input name="ctl00$MainBodyContent$fromDateText" value="{{ $proqua->from }}" id="MainBodyContent_fromDateText" class="form-control input-datepicker fromDateText" type="text" />
                                </div>
                                <div class="field-box">
                                    <label>To:</label>
                                    <input name="ctl00$MainBodyContent$toDateText" value="{{ $proqua->to }}" id="MainBodyContent_toDateText" class="form-control input-datepicker toDateText" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="wizard-actions text-center">
                    <input type="submit" name="ctl00$MainBodyContent$ProfessionalQuaEditBtn" value="Update Changes" id="MainBodyContent_ProfessionalQuaEditBtn" class="btn-glow success" />
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
        <div class="loading" align="center">
         
        </div>

        <footer class="col-md-12" style="background: #ff0000; clear: both; padding: 10px; color: #FFFFFF; position: fixed; bottom: 0px; left: 0px;">
            <div class="col-md-6">
                2014 © <a style="color: #FFFFFF" title="Midland Bank Ltd. official website" href="http://www.midlandbankbd.net/" target="_blank">Midland Bank Ltd.</a> All Rights Reserved. &nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="http://www.midlandbankbd.net/terms_of_service" target="_blank">Terms of Service</a>&nbsp; &nbsp; &nbsp;<a style="color: #FFFFFF;" href="GuideLine.aspx" target="_blank">How to Apply</a>
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
                location.href = "Logout.aspx";
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
            jQuery('.fromDateText').attr("readonly", "readonly");
            jQuery('.toDateText').attr("readonly", "readonly");
            // datepicker plugin
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery('.resultText').change(function () {
                var selectValue = $(".resultText option:selected").val();
                if (selectValue == 4) {
                    $('.cgpaDiv').show("slow");
                    $('.marksDIv').hide("slow");
                } else if (selectValue == 1 || selectValue == 2 || selectValue == 3) {
                    $('.marksDIv').show("slow");
                    $('.cgpaDiv').hide("slow");
                } else {
                    $('.cgpaDiv').hide("slow");
                    $('.marksDIv').hide("slow");
                }
            });

        });

        $('.btnEducationInfo').click(function (e) {

            jQuery('form').validate({
                errorClass: "error"
            });

            jQuery('.exam_titleText').rules('add', {
                required: true
            });
            jQuery('.concentration_groupText').rules('add', {
                required: true
            });
            jQuery('.institute_nameText').rules('add', {
                required: true
            });
            jQuery('.resultText').rules('add', {
                required: true,
                number: true
            });
            jQuery('.durationText').rules('add', {
                required: true
            });

            var selectValue = $(".resultText option:selected").val();
            if (selectValue == 4) {
                jQuery('.cgpaText').rules('add', {
                    required: true,
                    number: true
                });
                jQuery('.scaleText').rules('add', {
                    required: true,
                    number: true
                });
            } else if (selectValue == 1 || selectValue == 2 || selectValue == 3) {
                jQuery('.marksText').rules('add', {
                    required: true,
                    number: true
                });
            }

            if ($('form').valid()) {
                //alert("Hello");
                $($get("save_education_info")).click();
            } else {
                // alert("Error");
                e.preventDefault();
                return false;
            }
        });


        $('.btnProfessionalInfo').click(function (e) {

            jQuery('form').validate({
                errorClass: "error"
            });

            jQuery('.certificateText').rules('add', {
                required: true
            });
            jQuery('.instituteText').rules('add', {
                required: true
            });
            jQuery('.fromDateText').rules('add', {
                required: true
            });
            jQuery('.toDateText').rules('add', {
                required: true
            });


            if ($('form').valid()) {
                //alert("Hello");
                $($get("SaveProfessionalInfo")).click();
            } else {
                // alert("Error");
                e.preventDefault();
                return false;
            }
        });

        $('.btnTrainingInfo').click(function (e) {

            jQuery('form').validate({
                errorClass: "error"
            });

            jQuery('.training_titleText').rules('add', {
                required: true
            });
            jQuery('.instituteTrainingText').rules('add', {
                required: true
            });
            jQuery('.countryTrainingText').rules('add', {
                required: true
            });
            jQuery('.durationTrainingText').rules('add', {
                required: true
            });


            if ($('form').valid()) {
                //alert("Hello");
                $($get("saveTrainingInfo")).click();
            } else {
                // alert("Error");
                e.preventDefault();
                return false;
            }
        });

        //$('.AcademicGridView').dataTable({ "sPaginationType": "full_numbers" });

    </script>

</body>
</html>

