<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Online job Portal
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
    {{ Form::token() }}

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



        <!-- navbar -->
        <header class="navbar navbar-inverse" role="banner" style="margin-top: -15px;">
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
                    
                    <a href='Profile' role='button'>
                        <span id="userNameLabel">Welcome Md. Monirul Islam</span>
                    </a>
                    
                </li>
                
                <li class="settings">
                    <a href="{{ URL::route('jobseeker-sign-out') }}" role="button" onclick="confirmLogout()">
                        <span id="logoutNameLabel">Logout</span>
                    </a>
                </li>
                
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

