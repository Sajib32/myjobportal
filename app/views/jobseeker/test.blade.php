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
    <link rel="stylesheet" href="{{ URL::asset('css/compiled/form-wizard.css') }}">
    <style type="text/css">
        .datepicker {
            z-index: 1151 !important;
        }
    </style>
</head>
<body>
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
                <a class="navbar-brand" title="Midland Bank e-Recruitment Home Page" href="Career.aspx">
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
                <div id="fuelux-wizard" class="wizard row">
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
            
            <td>
                {{ $q->level_of_education }}
            </td><td>{{ $q->institute_name }}</td><td>{{ $q->institute_name }}</td><td>
                Name of School
                <br/><strong>Name:</strong> {{ $q->institute_name }}
            </td><td>
                <strong>Grade: </strong><br/>
                CGPA 5.00 (Out of Scale 5.00)
                <br/> <strong>Year of Passing: </strong>2007
            </td><td>2</td><td>&nbsp;</td><td>
                <a href="{{ URL::route('jobseeker-edit', array($q->id)) }}"
class="btn btn-info">Edit</a>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewTraining$ctl02$trainingQualificationEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewTraining$ctl02$trainingQualificationLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
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
            <td>
                {{ $qs->certification }}
            </td>
            <td>{{ $qs->certification }}</td>
            <td>{{ $qs->certification }}</td>
            <td>Apr 19, 2015</td>
            <td>Apr 21, 2015</td>
            <td>Apr 19, 2015</td>
            <td>
                <a id="MainBodyContent_GridViewProfessional_ProfessionalQualificationEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewProfessional$ctl02$ProfessionalQualificationEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_GridViewProfessional_professionalQualificationLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewProfessional$ctl02$professionalQualificationLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
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
            <td>
                dsfasd
            </td>
            <td>{{ $t->institute }}</td>
            <td>{{ $t->institute }}</td>
            <td>{{ $t->institute }}</td>
            <td>{{ $t->institute }}</td>
            <td>2000</td>
            <td>2</td>
            <td>Apr 19, 2015</td>
            <td>
                <a id="MainBodyContent_GridViewTraining_trainingQualificationEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewTraining$ctl02$trainingQualificationEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_GridViewTraining_trainingQualificationLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewTraining$ctl02$trainingQualificationLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
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
                                                    <select name="ctl00$MainBodyContent$level_educationText" id="MainBodyContent_level_educationText">
	<option value="1">Secondary</option>
	<option value="2">Higher Secondary</option>
	<option value="3">Diploma</option>
	<option value="4">Bachelor/Honors</option>
	<option value="5">Masters</option>
	<option value="6">Doctoral</option>

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
                                                <label>Institute Name:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select" style="width: 450px;">
                                                    <select name="ctl00$MainBodyContent$institute_nameText" id="MainBodyContent_institute_nameText" class="institute_nameText">
	<option value="1">Ahsanullah University of Science and Technology</option>
	<option value="2">America Bangladesh University</option>
	<option value="3">American International University-Bangladesh</option>
	<option value="4">ASA University Bangladesh</option>
	<option value="5">Asian University of Bangladesh</option>
	<option value="6">Atish Dipankar University of Science and Technology</option>
	<option value="7">Bangabandhu Agricultural University</option>
	<option value="8">Bangladesh Agricultural University</option>
	<option value="9">Bangladesh Islami University</option>
	<option value="10">Bangladesh Open University</option>
	<option value="11">Bangladesh University of Business and Technology(BUBT)</option>
	<option value="12">Bangladesh University of Engineering and Technology</option>
	<option value="13">Bangladesh University of Professionals (BUP)</option>
	<option value="14">Begum Gulchemonara Trust University</option>
	<option value="15">Brac University  </option>
	<option value="16">Central Women`s University</option>
	<option value="17">Chittagong University</option>
	<option value="18">Chittagong University of Engineering and Technology (CUET)</option>
	<option value="19">City University</option>
	<option value="20">Comilla University</option>
	<option value="21">Daffodil International University</option>
	<option value="22">Darul Ihsan University</option>
	<option value="23">Dhaka International University</option>
	<option value="24">University of Dhaka</option>
	<option value="25">Dhaka University of Engineering and Technology (DUET)  </option>
	<option value="26">East West University</option>
	<option value="27">Eastern University  </option>
	<option value="28">Gano Bishwabidyalaya</option>
	<option value="29">Green University of Bangladesh  </option>
	<option value="30">Hajee Mohammad Danesh Science and Technology University</option>
	<option value="31">IBA, Dhaka University  </option>
	<option value="32">IBA, Rajshahi University  </option>
	<option value="33">IBAIS University  </option>
	<option value="34">Independent University Bangladesh</option>
	<option value="35">Bangladesh  International University</option>
	<option value="36">Islamic University Chittagong</option>
	<option value="37">International Islamic University Chittagong  </option>
	<option value="38">International University of Business Agriculture and Technology (IUBAT)</option>
	<option value="39">Islamic University, Kushtia  </option>
	<option value="40">Islamic University of Technology (IUT)</option>
	<option value="41">Jagannath University  </option>
	<option value="42">Jahangirnagar University</option>
	<option value="43">Khulna University</option>
	<option value="44">Khulna University of Engineering and Technology (KUET)</option>
	<option value="45">Manarat International University</option>
	<option value="46">Mawlana Bhasani Science and Technology University</option>
	<option value="47">Metropolitan University</option>
	<option value="48">Sylhet Metropolitan University </option>
	<option value="49">Military Institute of Science &amp; Technology (MIST)  </option>
	<option value="50">National University</option>
	<option value="51">North South University</option>
	<option value="52">Northern University-Bangladesh</option>
	<option value="53">Noakhali Science &amp; Technology University</option>
	<option value="54">Patuakhali Science and Technology University  </option>
	<option value="55">Premier University </option>
	<option value="56">Chittagong  Presidency University</option>
	<option value="57">Presidency University  </option>
	<option value="58">Prime University</option>
	<option value="59">Primeasia University</option>
	<option value="60">Pundra University of Science and Technology</option>
	<option value="61">Queens University</option>
	<option value="62">Rajshahi University</option>
	<option value="63">Rajshahi University of Engineering and Technology (RUET)</option>
	<option value="64">Santa Marium University of Creative Technology</option>
	<option value="65">Shahjalal University of Science &amp; Technology</option>
	<option value="66">Sher-e-Bangla Agricultural University</option>
	<option value="67">South East University</option>
	<option value="68">Southern University</option>
	<option value="69">Stamford University</option>
	<option value="70">State University of Bangladesh</option>
	<option value="71">Sylhet International University</option>
	<option value="72">The Millenium University</option>
	<option value="73">The People&#39;s University of Bangladesh</option>
	<option value="74">The University of Asia Pacific</option>
	<option value="75">United International University</option>
	<option value="76">University of Development Alternative</option>
	<option value="77">University of Information Technology &amp; Science</option>
	<option value="78">University of Liberal Arts Bangladesh</option>
	<option value="79">University of Science and Technology</option>
	<option value="80">University of South Asia</option>
	<option value="81">Uttara University</option>
	<option value="82">Victoria University of Bangladesh</option>
	<option value="83">World University of Bangladesh</option>
	<option value="84">Others University (Local)</option>
	<option value="85">Others University (Foreign)</option>
	<option value="86">Others Institue (Local)</option>
	<option value="87">Others Institue (Foreign)</option>
	<option value="88">Name of School</option>
	<option value="89">Name of College</option>

</select>
                                                </div>
                                            </div>
                                            <div class="field-box" id="insOthersDiv" style="display: none;">
                                                <label>Name of the Institute</label>
                                                <input name="ctl00$MainBodyContent$insOtherText" id="MainBodyContent_insOtherText" class="form-control insOtherText" type="text" />
                                            </div>
                                            <div class="field-box">
                                                <label>Result:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select">
                                                    <select name="ctl00$MainBodyContent$resultText" id="MainBodyContent_resultText" class="resultText">
	<option value="1">First Division/Class</option>
	<option value="2">Second  Division/Class</option>
	<option value="3">Third Division/Class</option>
	<option value="4">Grade</option>
	<option value="5">Appeared</option>
	<option value="6">Enrolled</option>
	<option value="7">Awarded</option>
	<option value="8">Do not mention</option>

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
                                                <label>Year of Passing:<span style="color: #ff0000;"> *</span></label>
                                                <div class="ui-select">
                                                    <select name="ctl00$MainBodyContent$year_passingText" id="MainBodyContent_year_passingText" class="year_passingText">
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
                if (selectValue == 84 || selectValue == 85 || selectValue == 86 || selectValue == 87 || selectValue == 88 || selectValue == 89) {
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
            if (selectValue == 84 || selectValue == 85 || selectValue == 86 || selectValue == 87 || selectValue == 88 || selectValue == 89) {
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

