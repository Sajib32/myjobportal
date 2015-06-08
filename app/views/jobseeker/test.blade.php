<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
    Online Job Portal
</title>
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
<div class="container">
    <form method="post" action="{{ URL::route('jobseeker-step_02_view-post') }}" id="mainForm" class="form-horizontal" role="form">
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
                <a class="navbar-brand" title="Online Job Portal" href="Career">
                </a>
            </div>
            <ul class="nav navbar-nav pull-right hidden-xs">
                <li class="settings hidden-xs hidden-sm">
                    <a role="button">
                        <span id="informationStatus"></span>
                    </a>
                </li>
                <li class="settings">
                    
                    <a href='' role='button'>
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
                <div id="fuelux-wizard" class="wizard row">
                    ﻿ <ul class="wizard-steps">
    <li data-target="#step1" class="active"><span class="step">1</span>         <a href="Default.aspx">         <span class="title">General
        <br />
        information</span>             </a>     </li>
   
    <li data-target="#step3" class="active"><span class="step">3</span>         <a href="Academic.aspx">         <span class="title">Academic
        <br />
        Qualification</span>             </a>     </li>
    <li data-target="#step4"><span class="step">4</span>         <a href="{{URL::route('jobseeker-employment')}}">             <span class="title">Employment</span>
            </a>
    </li>
    <li data-target="#step5"><span class="step">5</span>         <a href="Others.aspx">         <span class="title">Others</span>             </a>     </li>
    <li data-target="#step6"><span class="step">6</span>         <a href="FileUpload.aspx">         <span class="title">Photograph /
        <br />
        CV as pdf format</span>             </a>     </li>
</ul>
                </div>
                <!--  -->
                <div id="MainBodyContent_divResultSubmitted"></div>
                <div class="step-content">
                    <div class="row form-wrapper">
                        <div class="col-md-12">
                            <h4>Academic Qualification</h4>
                            <br />
                        @if($qualification->isEmpty()) 
                            <span id="MainBodyContent_noAcademicLabel">
                        Currently no data exist! Please click on the following button to add your academic information.</span>
                        @else
    <div>                      
    <table class="display table table-hover table-bordered table-striped AcademicGridView" cellspacing="0" align="Right" id="MainBodyContent_AcademicGridView" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Level Of Education</th>
            <th scope="col">Exam/ Degree Title</th>
            <th scope="col">Concentration/ Major/ Group</th>
            <th scope="col">Institute Name</th>
            <th scope="col" style="width:150px;">Result</th>
            <th scope="col">Duration</th>
            <th scope="col">Achievement</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($qualification as $q)
        <tr>
            
            <td>{{ $q->examlevel->name }}</td>
            <td>{{ $q->exam_title }}</td>
            <td>{{ $q->major }}</td>
            @if($q->institute == '3' || $q->institute =='4')
            <td>Name of School
                <br/><strong>Name:</strong> {{ $q->institute_name }}
            </td>
            @else
             <td><strong>Name:</strong> {{ $q->institute_name }}</td>
            @endif
            @if($q->result == 'First Division' || $q->result == 'Second Division' || $q->result == 'Third Division')
            <td>
                <strong> {{ $q->result }} /Class: </strong><br/>
                    Marks: {{ $q->marks }}
                <br/> <strong>Year of Passing: </strong>{{ $q->year_of_passing }}
            </td>
            @else
            <td>
                <strong>Grade: </strong><br/>
                CGPA {{ $q->result }} (Out of Scale {{ $q->marks }})
                <br/> <strong>Year of Passing: </strong>{{ $q->year_of_passing }}
            </td>
            @endif
            <td>{{ $q->duration }}</td><td>{{ $q->achievement }}</td><td>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="{{ URL::route('jobseeker-edit', array($q->id)) }}"><i class="icon-edit icon-2x"></i></a>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="{{ URL::route('jobseeker-delete', array($q->id)) }}"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
         @endforeach
    </table>
</div>
@endif
                    <br />
                    <br />
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#educationModal">
                        Add Education
                    </button>
                    <br />
                    <br />
                    <br />
                    <h4>Professional Qualification</h4>
                    <br />
                    @if($proqualification->isEmpty())
                        <span id="MainBodyContent_noProfessional">Currently no data exist! Please click on the following button to add your professional qualification.</span>
                    @else
    <div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewProfessional" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Certification</th>
            <th scope="col">Institute</th>
            <th scope="col">Location</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Created on</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($proqualification as $qs)
        <tr>
            <td>{{ $qs->certification }}</td>
            <td>{{ $qs->institute }}</td>
            <td>{{ $qs->location }}</td>
            <td>{{ $qs->from }}</td>
            <td>{{ $qs->to }}</td>
            <td>{{ $qs->created_at }}</td>
            <td> 
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="{{ URL::route('jobseeker-proquaedit', array($qs->id)) }}"><i class="icon-edit icon-2x"></i></a>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="{{ URL::route('jobseeker-delete-proq', array($qs->id)) }}"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
                    <br />
                    <br />
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#professionalModal">
                        Add Professional Qualification
                    </button>
                    <br />
                    <br />
                    <br />
                    <h4>Training Qualification</h4>
                    <br />

                    @if($training->isEmpty())
                         <span id="MainBodyContent_noTraining">Currently no data exist! Please click on the following button to add your training qualification.</span>
                    <br />
                    @else
                    <div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewTraining" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Topics</th>
            <th scope="col">Institute</th>
            <th scope="col">Country</th>
            <th scope="col">Location</th>
            <th scope="col">Training Year</th>
            <th scope="col">Duration</th>
            <th scope="col">Created on</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        <tr>
            @foreach($training as $t)
            <td>{{ $t->title }}</td>
            <td>{{ $t->topics }}</td>
            <td>{{ $t->institute }}</td>
            <td>{{ $t->location }}</td>
            <td>{{ $t->country }}</td>
            <td>{{ $t->year }}</td>
            <td>{{ $t->duration }}</td>
            <td>{{ $t->created_at }}</td>
            <td>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="{{ URL::route('jobseeker-trainedit', array($t->id)) }}"><i class="icon-edit icon-2x"></i></a>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="{{ URL::route('jobseeker-delete-train', array($t->id)) }}"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif

                   
                    <br />
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#trainingModal">
                        Add Training
                    </button>
                </div>
            </div>

                    <!-- education Modal-->
           <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="educationLabel">Entry Form - Academic qualification</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row form-wrapper">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <label>Level of Education:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select">
                                                    <select name="examlevel[]" id="MainBodyContent_level_educationText">
    @foreach(ExamLevel::all() as $exam)
    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
    @endforeach
</select>
                                                </div>
                                            </div>

                                            <div class="field-box">
                                                <label>Exam/Degree Title:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$exam_titleText" id="MainBodyContent_exam_titleText" class="form-control exam_titleText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Concentration/ Major/Group:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$concentration_groupText" id="MainBodyContent_concentration_groupText" class="form-control concentration_groupText" type="text" />
                                            </div>
                                              <div class="field-box">
                                                <label>Full name of the Institute:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$insOtherText" id="MainBodyContent_concentration_groupText" class="form-control concentration_groupText" type="text" />
                                            </div>
                                            
                                            <div class="field-box">
                                                <label>Result:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select">
                                                    <select name="ctl00$MainBodyContent$resultText" id="MainBodyContent_resultText" class="resultText">
    <option value="1">First Division/Class</option>
    <option value="2">Second Division/Class</option>
    <option value="3">Third Division/Class</option>
    <option value="4">Grade</option>

</select>
                                                </div>
                                                Marks/CGPA.
                                            </div>
                                            <div class="field-box marksDIv">
                                                <label>Marks(%):<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$marksText" id="MainBodyContent_marksText" class="form-control marksText" type="text" />
                                            </div>
                                            <div class="field-box cgpaDiv" style="display: none;">
                                                <div class="col-md-5" style="padding: 0px;">
                                                    <label>CGPA:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$cgpaText" id="MainBodyContent_cgpaText" class="form-control cgpaText" type="text" style="width: 78%;" />
                                                </div>
                                                <div class="col-md-5" style="padding: 0px;">
                                                    <label>Scale:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$scaleText" id="MainBodyContent_scaleText" class="form-control scaleText" type="text" style="width: 78%;" />
                                                </div>
                                            </div>
                                            <div class="field-box">
                                                <label>Year of Passing:<span style="color: #ff0000;"> *(e.g. 2000)</span></label>
                                               <input name="year_of_passing" id="MainBodyContent_durationText" class="form-control durationText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Duration:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$durationText" id="MainBodyContent_durationText" class="form-control durationText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Achievement:</label>
                                                <input name="ctl00$MainBodyContent$achievementText" id="MainBodyContent_achievementText" class="form-control" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="ctl00$MainBodyContent$save_education_info" value="Save changes" id="MainBodyContent_save_education_info" class="btn btn-primary btnEducationInfo" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Modal-->
                    <div class="modal fade" id="trainingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="trainingLabel">Entry Form - Training</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row form-wrapper">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <label>Training Title:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$training_titleText" id="MainBodyContent_training_titleText" class="form-control training_titleText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Topics Covered:</label>
                                                <input name="ctl00$MainBodyContent$topicsText" id="MainBodyContent_topicsText" class="form-control" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Institute:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$instituteTrainingText" id="MainBodyContent_instituteTrainingText" class="form-control instituteTrainingText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Location :</label>
                                                <input name="ctl00$MainBodyContent$locationTrainingText" id="MainBodyContent_locationTrainingText" class="form-control" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Country:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$countryTrainingText" id="MainBodyContent_countryTrainingText" class="form-control countryTrainingText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Training Year:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select">
                                                    <select name="ctl00$MainBodyContent$yearTrainingText" id="MainBodyContent_yearTrainingText">
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option selected="selected" value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
</select>
                                                </div>
                                            </div>
                                            <div class="field-box">
                                                <label>Duration:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$durationTrainingText" id="MainBodyContent_durationTrainingText" class="form-control durationTrainingText" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="ctl00$MainBodyContent$saveTrainingInfo" value="Save changes" id="MainBodyContent_saveTrainingInfo" class="btn btn-primary btnTrainingInfo" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- professional Modal-->
                    <div class="modal fade" id="professionalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Entry Form - Professional qualification</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row form-wrapper">
                                        <div class="col-md-12">
                                            <div class="field-box">
                                                <label>Certification:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$certificateText" id="MainBodyContent_certificateText" class="form-control certificateText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Institute:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$instituteText" id="MainBodyContent_instituteText" class="form-control instituteText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Location:</label>
                                                <input name="ctl00$MainBodyContent$locationText" id="MainBodyContent_locationText" class="form-control" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>From:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$fromDateText" id="MainBodyContent_fromDateText" class="form-control input-datepicker fromDateText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>To:<span style="color: #ff0000;"> *</span></label>
                                                <input name="ctl00$MainBodyContent$toDateText" id="MainBodyContent_toDateText" class="form-control input-datepicker toDateText" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" name="ctl00$MainBodyContent$SaveProfessionalInfo" value="Save changes" id="MainBodyContent_SaveProfessionalInfo" class="btn btn-primary btnProfessionalInfo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wizard-actions text-center">
                    <a style="margin-left: 15px;" href="Contact.aspx" class="btn-glow primary btn-prev pull-left"><i class="icon-chevron-left"></i>Prev</a>
                    
                    <a class="btn-glow primary btn-next pull-right" href="{{ URL::route('jobseeker-employment') }}" data-last="Finish">Next <i class="icon-chevron-right"></i></a>
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
        <script src="{{ URL::asset('js/theme.js') }}"></script>
    <script type="text/javascript">
        jQuery('.fromDateText').attr("readonly", "readonly");
        jQuery('.toDateText').attr("readonly", "readonly");
        $(function () {
            // datepicker plugin
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
        });

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


            jQuery('.institute_nameText').change(function () {
                var selectValue = $(".institute_nameText option:selected").val();
                if (selectValue == 3 || selectValue == 4) {
                    $('#insOthersDiv').show("slow");
                } else {
                    $('#insOthersDiv').hide("slow");
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
                    number: true,
                    max: 100
                });
            }

            var selectValue = $(".institute_nameText option:selected").val();
            if (selectValue == 3 || selectValue == 4) {
                jQuery('.insOtherText').rules('add', {
                    required: true
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

</body>
</html>

