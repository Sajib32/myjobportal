<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Midland Bank e-Recruitment System
</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8000/css/bootstrap-overrides.css">

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
     <link rel="stylesheet" href="http://localhost:8000/css/compiled/print.css">

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
    <form method="post" action="Profile.aspx" id="mainForm" class="form-horizontal" role="form">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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ZAIGDzwrABECARAWABYAFgAMFCsAAGQCCA88KwARAgEQFgAWABYADBQrAABkAgkPDxYCHwAFGUN1cnJlbnRseSBubyBkYXRhIGV4aXN0ISBkZAIKDzwrABEDAA8WAh8EaGQBEBYAFgAWAAwUKwAAZAILDw8WAh8ABRlDdXJyZW50bHkgbm8gZGF0YSBleGlzdCEgZGQCDA88KwARAwAPFgIfBGhkARAWABYAFgAMFCsAAGQCDQ8PFgIfAAUZQ3VycmVudGx5IG5vIGRhdGEgZXhpc3QhIGRkAg4PPCsAEQMADxYCHwRoZAEQFgAWABYADBQrAABkAg8PDxYCHwAFGUN1cnJlbnRseSBubyBkYXRhIGV4aXN0ISBkZAIQDzwrABEDAA8WAh8EaGQBEBYAFgAWAAwUKwAAZAIRDw8WAh8ABRlDdXJyZW50bHkgbm8gZGF0YSBleGlzdCEgZGQCEg88KwARAwAPFgIfBGhkARAWABYAFgAMFCsAAGQCEw8PFgIfAAUZQ3VycmVudGx5IG5vIGRhdGEgZXhpc3QhIGRkAhQPPCsAEQMADxYCHwRoZAEQFgAWABYADBQrAABkAhUPDxYCHwAFGUN1cnJlbnRseSBubyBkYXRhIGV4aXN0ISBkZAIWDzwrABEDAA8WAh8EaGQBEBYAFgAWAAwUKwAAZAIXDw8WAh8ABRlDdXJyZW50bHkgbm8gZGF0YSBleGlzdCEgZGQYCwUnY3RsMDAkTWFpbkJvZHlDb250ZW50JEdyaWRWaWV3UmVmZXJlbmNlD2dkBSpjdGwwMCRNYWluQm9keUNvbnRlbnQkR3JpZFZpZXdQcm9mZXNzaW9uYWwPZ2QFJWN0bDAwJE1haW5Cb2R5Q29udGVudCRTcGVjaWFsR3JpZFZpZXcPZ2QFJmN0bDAwJE1haW5Cb2R5Q29udGVudCRHcmlkVmlld1RyYWluaW5nD2dkBSZjdGwwMCRNYWluQm9keUNvbnRlbnQkR3JpZFZpZXdMYW5ndWFnZQ9nZAUlY3RsMDAkTWFpbkJvZHlDb250ZW50JEdyaWRWaWV3Q29udGFjdA9nZAUsY3RsMDAkTWFpbkJvZHlDb250ZW50JEdyaWRWaWV3Q29udGFjdEFkZHJlc3MPZ2QFJWN0bDAwJE1haW5Cb2R5Q29udGVudCRHcmlkVmlld0dlbmVyYWwPPCsADAEIAgFkBSZjdGwwMCRNYWluQm9keUNvbnRlbnQkQWNhZGVtaWNHcmlkVmlldw9nZAUqY3RsMDAkTWFpbkJvZHlDb250ZW50JEdyaWRWaWV3Q29udGFjdFRhYmxlD2dkBShjdGwwMCRNYWluQm9keUNvbnRlbnQkRW1wbG95bWVudEdyaWRWaWV3D2dko8ntFXR7ZP3WOTCyXJ9uclnNtrDaBikgaGf0AWpHRig=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['mainForm'];
if (!theForm) {
    theForm = document.mainForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div class="aspNetHidden">

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAA0WQUKoXpOS0v2b1p/3yqBj/Y4I75eKRrrKq3WeKr/R0CtDjCwUwuJPgk23nxYnPbUF+RKOk8KUThv0hvTycZdjfhjCjTTPL0sqBhUh0Obl/sn0BTlgvwORdEnwTzDuVNA+Vh7Y+LisNwxPuhTsq3D9rsNTQkQc6tUP+Tjrx4n66hozpjpUDB4WDRjd8YV9175RACsddxwFnGaCbvMX9fbGTQDeat0xQeuuliKgcwaoSX4ZIz/WXKWEZIjKDO6SZngJ60feMXihQ2mFb0E4xXrXWWcJTz7+ebKxj2qXYx8AMVe+tR9MfNofK2tMqWItAmM=" />
</div>
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

                
    <div id="pad-wrapper" class="user-profile" style="margin-top: 0px; padding: 10px;">
        <!-- header -->
        <div class="row header" style="margin-bottom: 20px;">
            <a href="#" class="btn-flat icon hrefPrint" data-toggle="tooltip" title="Print" data-placement="bottom">
                <i class="icon-print"></i>
            </a>
            
            <a href="~/uploads/cv/4039579739.pdf" onclick="return confirm('Do you want to download?')" class="btn-flat icon large edit" target="_blank" data-toggle="tooltip" title="Download CV" data-placement="bottom">Download CV</a>
            <a onclick="ConfirmEditProfile();" id="MainBodyContent_editProfileBtn" class="btn-flat icon large edit" data-toggle="tooltip" title="Edit Profile" data-placement="bottom" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$editProfileBtn&#39;,&#39;&#39;)">Edit Profile</a>
        </div>
        <div class="alert alert-info alert-dismissable text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4 id="MainBodyContent_cvStatus">Incomplete CV</h4>
        </div>
        <div style="clear: both; margin: 60px;"></div>
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
                                
                                <h5 class="name" style="font-family: 'Times New Roman'; font-size: 17px;">Tracking Number: 4039579739</h5>
                                
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
                                        <div style="width: 150px; clear: both; float:left;"><strong>Full Name:</strong></div>        <div style="width: 400px;">Md. Monirul Islam</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>First Name:</strong></div>       <div style="width: 400px;">Monirul</div>
                                        
                                        
                                        <div style="width: 150px; clear: both; float:left;"><strong>Mother's Name:</strong></div>    <div style="width: 400px;">Mrs. Parveen Akter</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Father's Name:</strong></div>    <div style="width: 400px;">Ruhul Amin</div>
                                        
                                        <div style="width: 150px; clear: both; float:left;"><strong>Gender:</strong> </div>          <div style="width: 400px;">Male</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Religion:</strong></div>         <div style="width: 400px;">Islam</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Date of Birth:</strong></div>     <div style="width: 400px;">Jan 01, 1991</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>National ID:</strong> </div>     <div style="width: 400px;">19911916765000048</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Home District:</strong> </div>   <div style="width: 400px;">Comilla        </div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Marital Status:</strong></div>   <div style="width: 400px;">Single</div>
                                        <div style="width: 150px; clear: both; float:left;"><strong>Blood Group:</strong> </div>     <div style="width: 400px;">A Negative</div>
                                    </td>
		</tr>
	</table>
</div>
                    </div>
                    <br />
                    <div class="section">
                        <h4 style="clear: both;">Contact Information</h4>
                        <div>

</div>
                        <span id="MainBodyContent_noContactInfo"></span>
                    </div>
                    <br />
                    <div class="section">
                        <h4 style="clear: both;">Address Information</h4>
                        <div>

</div>
                        <span id="MainBodyContent_noCareerLabel">Currently no data exist! </span>
                    </div>
                    <br />
                    <div class="section">
                        <h4 style="clear: both;">Academic Qualification</h4>
                        
                        <span id="MainBodyContent_noAcademicLabel">Currently no data exist! </span>
                        <br />

                        <h4 style="clear: both;">Professional Qualification</h4>
                        
                        <span id="MainBodyContent_noProfessional">Currently no data exist! </span>
                        <br />

                        <h4 style="clear: both;">Training Information</h4>
                        
                        <span id="MainBodyContent_noTraining">Currently no data exist! </span>

                        <br />
                        <h4 style="clear: both;">Employment History</h4>
                        
                        <span id="MainBodyContent_noEmploymentLabel">Currently no data exist! </span>
                    </div>
                    <br />
                    <div class="section">
                        <h4 style="clear: both;">Fields of Specialization and Extracurricular Activites</h4>
                        
                        <span id="MainBodyContent_noResultLabel">Currently no data exist! </span>
                        <br />
                        <h4 style="clear: both;">Language</h4>
                        
                        <span id="MainBodyContent_noLanguage">Currently no data exist! </span>
                        <br />
                        <h4 style="clear: both;">References</h4>
                        
                        <span id="MainBodyContent_noReference">Currently no data exist! </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>
            <!-- side right column -->

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
    <!-- scripts -->
    <script src="http://localhost:8000/js/jquery-2.1.0.min.js"></script>
    <script src="http://localhost:8000/js/bootstrap.min.js"></script>
    <script src="http://localhost:8000/js/theme.js"></script>

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
     <script src="http://localhost:8000/js/Validate/jquery.jqprint.js"></script>
 
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

</body>
</html>

