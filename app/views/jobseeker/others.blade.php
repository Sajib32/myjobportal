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
</head>
<body>
    <form method="post" action="{{ URL::route('jobseeker-others-post') }}" id="mainForm" class="form-horizontal" role="form">
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
    <li data-target="#step4" class="active"><span class="step">4</span>         <a href="Employment.aspx">             <span class="title">Employment</span>
            </a>
    </li>
    <li data-target="#step5" class="active"><span class="step">5</span>         <a href="Others.aspx">         <span class="title">Others</span>             </a>     </li>
    <li data-target="#step6"><span class="step">6</span>         <a href="FileUpload.aspx">         <span class="title">Photograph /
        <br />
        CV as pdf format</span>             </a>     </li>
</ul>
                </div>
                    <div id="MainBodyContent_divResultSubmitted"></div>
                    <div class="step-content">
                        <div class="row form-wrapper">
                            <div class="col-md-12">
                                <h4>Fields of Specialization and Extracurricular Activites</h4>
                                <br />
                                @if($others->isEmpty())
                                    <span id="MainBodyContent_noResultLabel">Currently no data exist! Please click on the following button to add your extracurricular activites.</span>
                                @else
<div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_SpecialGridView" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Skill Description</th>
            <th scope="col">Extracurricular Activities</th>
            <th scope="col">Created on</th><th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($others as $o)
        <tr>
            <td>
                Accounting/Finance <br/> <strong>Fields of Specialization:</strong> 
                <br/>{{ $o->field_of_spec }}, 
            </td>
            <td>{{ $o->skill_desc }}</td>
            <td>{{ $o->category_name }}</td>
            <td>Apr 20, 2015</td>
            <td>
                <a id="MainBodyContent_SpecialGridView_specializationEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$SpecialGridView$ctl02$specializationEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_SpecialGridView_specializationLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$SpecialGridView$ctl02$specializationLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>      
@endif
                                <br />
                                <br />
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#specializationModal">
                                    Add Specialization 
                                </button>
                                <br />
                                <br />
                                <br />
                                <h4>Language</h4>
                                <br />
                                @if($languages->isEmpty())
                                    <span id="MainBodyContent_noLanguage">Currently no data exist! Please click on the following button to add your Language information.</span>
                                @else
                                <div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewLanguage" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Reading</th>
            <th scope="col">Writing</th>
            <th scope="col">Speaking</th>
            <th scope="col">Created on</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($languages as $l)
        <tr>
            <td>{{ $l->title }}</td>
            <td>{{ $l->reading }}</td>
            <td>{{ $l->writting }}</td>
            <td>{{ $l->speaking }}</td>
            <td>Apr 20, 2015</td>
            <td>
                <a id="MainBodyContent_GridViewLanguage_languageEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewLanguage$ctl02$languageEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_GridViewLanguage_languageLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewLanguage$ctl02$languageLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endif
                                
                                
                                <br />
                                <br />
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#languageModal">
                                    Add Language 
                                </button>
                                <br />
                                <br />
                                <br />
                                <h4>References</h4>
                                <br />

                                @if($references->isEmpty())
                                    <span id="MainBodyContent_noReference">Currently no data exist! Please click on the following button to add your reference information.</span>
                                @else
                                <div>
    <table class="display table table-hover table-bordered table-striped" cellspacing="0" align="Right" id="MainBodyContent_GridViewReference" style="border-collapse:collapse;">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Relation</th>
            <th scope="col">Created on</th>
            <th scope="col" style="width:70px;">Actions</th>
        </tr>
        @foreach($references as $r)
        <tr>
            <td>
                {{ $r->name }} <br/> <strong>Organigation:</strong> <br/>{{ $r->organization }}
            </td>
            <td>{{ $r->address }}</td>

            <td>{{ $r->mobile }}</td>
            <td>&nbsp;</td><td>{{ $r->relation }}</td>
            <td>Apr 23, 2015</td><td>
                <a id="MainBodyContent_GridViewReference_referenceEditLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewReference$ctl02$referenceEditLink&#39;,&#39;&#39;)"><i class="icon-edit icon-2x"></i></a>
                <a onclick="Confirm();" id="MainBodyContent_GridViewReference_referenceLink_0" href="javascript:__doPostBack(&#39;ctl00$MainBodyContent$GridViewReference$ctl02$referenceLink&#39;,&#39;&#39;)"><i class="icon-remove icon-2x"></i></a>
            </td>
        </tr>
         @endforeach
    </table>
</div>
@endif

                                
                                <br />
                                <br />
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#referenceModal">
                                    Add References 
                                </button>
                            </div>
                        </div>

                        <!-- Specialization Modal-->
                        <div class="modal fade" id="specializationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="educationLabel">Edit Form - Specialization and Extracurricular Activities</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-wrapper">
                                            <div class="col-md-12">
                                                <div class="field-box">
                                                    <label>Category Name:</label>
                                                    <div class="ui-select">
                                                        <select name="ctl00$MainBodyContent$categoryName" id="MainBodyContent_categoryName" class="BDJdropdownlist categoryName">
	<option value="1">Accounting/Finance</option>
	<option value="2">Advertisement/Event Mgt.</option>
	<option value="3">Banking/Insurance/Leasing</option>
	<option value="4">Commercial/Supply Chain</option>
	<option value="5">Customer Support/Call Centre</option>
	<option value="6">Data Entry/Operator/BPO</option>
	<option value="7">Design/Creative</option>
	<option value="8">Education/Training</option>
	<option value="9">Engineer/Architect</option>
	<option value="10">Garments/Textile</option>
	<option value="11">General Management/Admin</option>
	<option value="12">HR/Org. Development</option>
	<option value="13">IT/Telecommunication</option>
	<option value="14">Marketing/Sales</option>
	<option value="15">Medical/Pharmaceutical</option>
	<option value="16">NGO/Development</option>
	<option value="17">Research/Consultancy</option>
	<option value="18">Secretary/Receptionist</option>
</select>
                                                    </div>
                                                </div>

                                                <div class="field-box">
                                                    <label>Choose Category:</label>
                                                    <select name="ctl00$MainBodyContent$categoryAreas" id="MainBodyContent_categoryAreas" style="width: 250px" multiple="multiple" class="select2">
	<option value="955">ACA/ACMA</option>
	<option selected="selected" value="961">Accounts</option>
	<option value="960">Admin</option>
	<option value="973">Administration</option>
	<option value="980">Administrative/Executive</option>
	<option value="984">Area/ Territory Marketing</option>
	<option value="949">B.com. / Bachelors</option>
	<option value="957">Banks &amp; Financial</option>
	<option value="950">CA CC</option>
	<option value="952">CA inter</option>
	<option value="981">Chemist</option>
	<option value="951">CMA - part</option>
	<option value="962">Commercial/Purchase</option>
	<option value="966">Compliance</option>
	<option value="994">Computer Operator</option>
	<option value="998">Data Entry Operator/Supervisor</option>
	<option value="982">Doctor</option>
	<option value="963">Dyeing/ Washing</option>
	<option value="964">Engineers</option>
	<option value="983">Faculty/Trainer</option>
	<option value="958">Govt.Sector Corporation</option>
	<option value="974">Human Resources</option>
	<option value="965">Incharge (Cutting/Sewing/Finishing/Floor etc.)</option>
	<option value="953">M.Com.</option>
	<option value="976">Marketing.</option>
	<option value="954">MBA/ BBA</option>
	<option value="985">Medical Representative/ Marketing Executive/ MPO</option>
	<option value="986">Medical Technologist</option>
	<option value="968">Merchandising</option>
	<option value="987">Micro-Biologist</option>
	<option value="956">NGO/Other Services</option>
	<option value="988">Nurse/ Paramedics</option>
	<option value="995">Office Assistant</option>
	<option value="989">Pathologist</option>
	<option value="990">Pharmacist</option>
	<option value="969">Production</option>
	<option value="978">Production</option>
	<option value="970">Quality Control/Inspect</option>
	<option value="996">Receptionist/Front Desk</option>
	<option value="997">Secretary</option>
	<option value="979">Security</option>
	<option value="959">Service Sector</option>
	<option value="991">Specialist/Consultant</option>
	<option value="975">Store</option>
	<option value="971">Store Keeper/Manager</option>
	<option value="1017">Struts</option>
	<option value="992">Supervisor..</option>
	<option value="972">Supervisor/Operator</option>
	<option value="999">Telephone Operator</option>
	<option value="977">Training &amp; Development</option>
	<option value="993">Veterinarian</option>
	<option value="967">Work Study</option>
	<option value="650">3Com/HP/SMC</option>
	<option value="576">3D Animation</option>
	<option value="664">3dStudioMax</option>
	<option value="768">Accounting</option>
	<option value="914">Accounting Data Entry</option>
	<option value="550">Accounting Data Entry</option>
	<option value="327">Accounts</option>
	<option value="404">Accounts</option>
	<option value="941">Accounts</option>
	<option value="663">ActionScript</option>
	<option value="937">Activation Management</option>
	<option value="489">Activation Management</option>
	<option value="620">ActiveReports</option>
	<option value="367">Actuary (Insurance)</option>
	<option value="350">Administration</option>
	<option value="413">Administration</option>
	<option value="420">Administration</option>
	<option value="507">Administrative</option>
	<option value="660">Adobe After Effects</option>
	<option value="1029">Adobe Flex</option>
	<option value="659">Adobe Photoshop/Illustrator</option>
	<option value="821">Advertising</option>
	<option value="839">Advertising &amp; Promotion</option>
	<option value="464">Advertising &amp; Promotion</option>
	<option value="508">Advisor/Consultant</option>
	<option value="519">Advocacy</option>
	<option value="1051">Aeronautical/Aerospace Engineering</option>
	<option value="479">Agency Producer</option>
	<option value="927">Agency Production</option>
	<option value="895">Agriculture</option>
	<option value="769">Agriculture/ Forestry</option>
	<option value="938">Ajax</option>
	<option value="1034">Android</option>
	<option value="457">Animator</option>
	<option value="613">Applets</option>
	<option value="686">ArcGIS</option>
	<option value="813">Architecture</option>
	<option value="857">Architecture</option>
	<option value="884">Argriculture/Forestry</option>
	<option value="878">Arsenic</option>
	<option value="801">Art</option>
	<option value="572">Art &amp; Sketch</option>
	<option value="473">Art Direction</option>
	<option value="921">Art Direction</option>
	<option value="630">ASP</option>
	<option value="631">ASP.Net</option>
	<option value="1042">Asterisk</option>
	<option value="655">ATM Network Designing</option>
	<option value="330">Audit</option>
	<option value="668">AutoCad</option>
	<option value="685">AutoCAD</option>
	<option value="770">Bengali</option>
	<option value="595">BeOS</option>
	<option value="504">Bio-Chemist/Chemist</option>
	<option value="804">Bio-Chemistry</option>
	<option value="771">Bio-Technology</option>
	<option value="772">Biology</option>
	<option value="679">Biztalk Server</option>
	<option value="1033">Blackberry/RIM</option>
	<option value="816">Botany</option>
	<option value="353">Branch Management</option>
	<option value="488">Brand Communication</option>
	<option value="936">Brand Communication</option>
	<option value="357">Brand Management</option>
	<option value="461">Brand Planning/Development</option>
	<option value="836">Brand Promotion</option>
	<option value="426">Business Analyst</option>
	<option value="462">Business Development</option>
	<option value="837">Business Development</option>
	<option value="898">Business Research</option>
	<option value="773">Business Studies</option>
	<option value="347">Business/Product Development</option>
	<option value="599">C#</option>
	<option value="601">C++/VC++</option>
	<option value="602">C/Turbo C</option>
	<option value="1007">CAD</option>
	<option value="690">CADD</option>
	<option value="911">CADD Operator</option>
	<option value="547">CADD Operator</option>
	<option value="455">CADD Operator</option>
	<option value="556">Call Centre Supervision/Management</option>
	<option value="558">Call Centre Training</option>
	<option value="764">Capital Market/Investment Banking</option>
	<option value="344">CARDS (Credit/Debit)</option>
	<option value="343">Cash Management</option>
	<option value="761">Cash Management</option>
	<option value="946">Cash Management</option>
	<option value="642">CGI/PERL</option>
	<option value="814">Chemical Engineering</option>
	<option value="858">Chemical Engineering</option>
	<option value="945">Chemist</option>
	<option value="775">Chemistry/ Bio-Chemistry</option>
	<option value="649">Cisco</option>
	<option value="859">Civil</option>
	<option value="811">Civil Engineering</option>
	<option value="366">Claims Processing (Insurance)</option>
	<option value="476">Client Service/ Marketing</option>
	<option value="924">Client Service/ Marketing</option>
	<option value="673">CMMi</option>
	<option value="604">Cobol/Cobol.Net</option>
	<option value="1027">CodeIgniter</option>
	<option value="629">ColdFusion</option>
	<option value="774">Commerce</option>
	<option value="368">Commercial</option>
	<option value="396">Commercial</option>
	<option value="333">Commercial/Export-Import</option>
	<option value="517">Communication/Public Relation/Media</option>
	<option value="334">Company Secretary/Share Division</option>
	<option value="354">Company Secretary/Share Operation</option>
	<option value="825">Compensation &amp; Benefits</option>
	<option value="564">Compensation/Benefits,Attendance,Leave Management</option>
	<option value="425">Compliance</option>
	<option value="401">Compliance</option>
	<option value="829">Compliance</option>
	<option value="872">Computer Engineering</option>
	<option value="551">Computer Operator</option>
	<option value="776">Computer Science/Engineering</option>
	<option value="855">Consumer Durables - Sales &amp; Marketing</option>
	<option value="449">Content Developer</option>
	<option value="477">Copy writing/Script Writing</option>
	<option value="925">Copy writing/Script Writing</option>
	<option value="609">CORBA</option>
	<option value="661">CorelDraw</option>
	<option value="337">Corporate</option>
	<option value="751">Corporate Finance</option>
	<option value="844">Corporate Marketing</option>
	<option value="469">Corporate Marketing</option>
	<option value="777">Cost &amp; Management Accounting</option>
	<option value="559">Counseling</option>
	<option value="922">Creative</option>
	<option value="474">Creative (Creative Director/Manager)</option>
	<option value="747">Credit</option>
	<option value="341">Credit Administration</option>
	<option value="752">Credit Card</option>
	<option value="346">Credit Risk Analysis</option>
	<option value="619">Crystal Reports</option>
	<option value="634">CSS</option>
	<option value="382">Curriculum/Program Development</option>
	<option value="355">Customer Relation</option>
	<option value="450">Customer Support</option>
	<option value="554">Customer Support through Phone</option>
	<option value="465">Customer Support/Client Service</option>
	<option value="840">Customer Support/Client Service</option>
	<option value="531">Data Analysis</option>
	<option value="546">Data Conversion</option>
	<option value="910">Data Conversion</option>
	<option value="906">Data Entry Operator (Bengali)</option>
	<option value="542">Data Entry Operator (Bengali)</option>
	<option value="543">Data Entry Operator (Both English &amp; Bengali)</option>
	<option value="907">Data Entry Operator (Both English &amp; Bengali)</option>
	<option value="905">Data Entry Operator (English)</option>
	<option value="541">Data Entry Operator (English)</option>
	<option value="544">Data Entry Supervisor</option>
	<option value="908">Data Entry Supervisor</option>
	<option value="436">Database Administrator (DBA)</option>
	<option value="437">Database Engineer/Database Programmer</option>
	<option value="626">DB2</option>
	<option value="1015">Delphi</option>
	<option value="748">Deposit</option>
	<option value="385">Designing</option>
	<option value="621">Developer 2000</option>
	<option value="806">Development Economics</option>
	<option value="899">Development Research</option>
	<option value="371">Distribution</option>
	<option value="459">Distribution/Supply Chain Management</option>
	<option value="835">Distribution/Supply Chain Management</option>
	<option value="490">Doctor/Consultant</option>
	<option value="485">Documentation</option>
	<option value="532">Documentation</option>
	<option value="933">Documentation</option>
	<option value="1000">Documentation</option>
	<option value="1048">DotNetNuke</option>
	<option value="394">Drafting</option>
	<option value="800">Drama/Movie/Cinema</option>
	<option value="644">DreamWeaver</option>
	<option value="1050">Drupal</option>
	<option value="890">Economic</option>
	<option value="778">Economics</option>
	<option value="1047">EDI</option>
	<option value="880">Education</option>
	<option value="904">Education</option>
	<option value="377">Education Administration/Management</option>
	<option value="378">Education Counseling</option>
	<option value="380">Education Marketing</option>
	<option value="381">Education Research</option>
	<option value="608">EJB</option>
	<option value="863">Electrical/Electronics</option>
	<option value="819">Electrical/Electronics</option>
	<option value="403">Engineering</option>
	<option value="805">Engineering(except Computer)</option>
	<option value="779">English (Language)</option>
	<option value="780">English (Literature)</option>
	<option value="896">Environment</option>
	<option value="885">Environment/Disaster Management</option>
	<option value="783">Environmental Science</option>
	<option value="480">Event/Campaign Co-ordinator</option>
	<option value="928">Event/Campaign Coordination</option>
	<option value="535">Executive Assistant</option>
	<option value="373">Export/Import through L/C</option>
	<option value="553">Face-to-Face Customer Support</option>
	<option value="565">Factory HR Administration</option>
	<option value="392">Factory/Plant/Facility Management</option>
	<option value="578">Fashion Design</option>
	<option value="416">Fashion Designing</option>
	<option value="509">Field or Project Organizer</option>
	<option value="528">Field Supervisor</option>
	<option value="527">Field Work</option>
	<option value="1032">Filemaker Pro</option>
	<option value="483">Films Department (Audio Visual, Cameraman)</option>
	<option value="931">Films Department (Audio Visual, Cameraman)</option>
	<option value="781">Finance</option>
	<option value="510">Finance</option>
	<option value="328">Finance</option>
	<option value="405">Finance &amp; Bank Operation</option>
	<option value="340">Finance/Accounts</option>
	<option value="854">Financial Products/Services Marketing</option>
	<option value="897">Financial Research</option>
	<option value="916">Financial/ Banking service</option>
	<option value="574">Flash Design</option>
	<option value="406">Floor/Line Management</option>
	<option value="848">FMCG Sales &amp; Marketing</option>
	<option value="1002">Food Technologist</option>
	<option value="746">Foreign Exchange</option>
	<option value="339">Foreign Exchange &amp; Remittance</option>
	<option value="617">Fortran</option>
	<option value="616">FoxPro</option>
	<option value="596">FreeBSD/OpenBSD/NetBSD</option>
	<option value="375">Freight Forwarding/C&amp;F</option>
	<option value="539">Front Desk</option>
	<option value="645">FrontPage</option>
	<option value="520">Fund Raiser</option>
	<option value="875">Gender</option>
	<option value="335">General Banking</option>
	<option value="562">General HR</option>
	<option value="754">General Insurance</option>
	<option value="803">Genetic</option>
	<option value="782">Geography</option>
	<option value="654">Gigabit Network Designing</option>
	<option value="689">GIS</option>
	<option value="456">GIS</option>
	<option value="869">GIS/Mapping</option>
	<option value="902">Governance</option>
	<option value="809">Governance</option>
	<option value="851">Government Procurement</option>
	<option value="573">Graphic Design (Computer Aided)</option>
	<option value="445">Graphic Designer</option>
	<option value="561">Guest Relations/Services</option>
	<option value="441">Hardware Engineer</option>
	<option value="874">Health</option>
	<option value="785">Health Economics/Population Science</option>
	<option value="1003">Health, Safety &amp; Fire</option>
	<option value="894">Health/Medical</option>
	<option value="1044">Hibernate</option>
	<option value="683">Host Integration Server</option>
	<option value="920">Hotel &amp; Restaurent</option>
	<option value="757">House Financing</option>
	<option value="943">HR</option>
	<option value="351">HR &amp; Training</option>
	<option value="831">HRIS</option>
	<option value="569">HRIS/HR Database Management</option>
	<option value="633">HTML/DHTML</option>
	<option value="784">Human Resource Management</option>
	<option value="1025">Hyperion</option>
	<option value="903">ICT</option>
	<option value="886">ICT for Development</option>
	<option value="912">Image to Text Conversion</option>
	<option value="548">Image to Text Conversion</option>
	<option value="867">Industrial &amp; Production Engineering</option>
	<option value="891">Industrial Research</option>
	<option value="402">Inspection</option>
	<option value="387">Installation/Erection</option>
	<option value="549">Insurance Data Verification</option>
	<option value="362">Insurance Marketing &amp; Sales</option>
	<option value="913">Insurance Varification</option>
	<option value="579">Interior Design</option>
	<option value="352">Internal Audit</option>
	<option value="329">Internal Audit</option>
	<option value="893">International Affairs</option>
	<option value="766">International Banking</option>
	<option value="415">International Marketing</option>
	<option value="786">International Relation</option>
	<option value="842">International/Export Marketing</option>
	<option value="467">International/Export Marketing</option>
	<option value="530">Interviewer</option>
	<option value="422">Inventory/Store Management</option>
	<option value="763">Islamic Banking</option>
	<option value="827">ISO 14000</option>
	<option value="826">ISO 9001:2000</option>
	<option value="850">IT &amp; Software Marketing</option>
	<option value="918">IT Support Service</option>
	<option value="451">IT System Management</option>
	<option value="349">IT/MIS</option>
	<option value="605">Java EE/ J2EE</option>
	<option value="607">Java ME/ J2ME</option>
	<option value="606">Java SE/ J2SE</option>
	<option value="612">JavaBeans</option>
	<option value="641">JavaScript</option>
	<option value="832">Job Analysis &amp; Manpower Planning</option>
	<option value="1049">Joomla</option>
	<option value="787">Journalism &amp; Mass Communication</option>
	<option value="615">JSP</option>
	<option value="1006">Labor Counseling</option>
	<option value="830">Labor Issues</option>
	<option value="834">Labor Law</option>
	<option value="833">Labor Management</option>
	<option value="571">Labor Union Management</option>
	<option value="1005">Laboratory/ Testing</option>
	<option value="1035">LAMP Administration</option>
	<option value="648">LAN/WAN</option>
	<option value="580">Landscape Design</option>
	<option value="756">Lease Financing</option>
	<option value="424">Legal</option>
	<option value="887">Legal Aid</option>
	<option value="521">Legal Aid &amp; Services</option>
	<option value="567">Legal Compliance/Code of Conduct</option>
	<option value="379">Library Management</option>
	<option value="788">Library Science</option>
	<option value="755">Life Insurance</option>
	<option value="1024">Lingo</option>
	<option value="590">Linux</option>
	<option value="676">Linux-based Mail Server</option>
	<option value="618">LISP</option>
	<option value="372">Logistic</option>
	<option value="423">Logistic Management</option>
	<option value="917">Logistic Service</option>
	<option value="677">Lotus Notes</option>
	<option value="589">Mac OS</option>
	<option value="1037">Mac OS X</option>
	<option value="662">Macromedia Flash MX</option>
	<option value="1028">Magneto</option>
	<option value="789">Management</option>
	<option value="901">Management Research</option>
	<option value="518">Manual Development/Documentation</option>
	<option value="360">Market Development (Banking)</option>
	<option value="361">Market Development (Leasing)</option>
	<option value="468">Market Research</option>
	<option value="843">Market Research</option>
	<option value="888">Market/Consumer Research</option>
	<option value="790">Marketing</option>
	<option value="460">Marketing</option>
	<option value="791">Math</option>
	<option value="667">Maya</option>
	<option value="864">Mechanical</option>
	<option value="812">Mechanical Engineering</option>
	<option value="883">Media</option>
	<option value="820">Media &amp; Communication</option>
	<option value="852">Media Management</option>
	<option value="926">Media Planning/Media Buying</option>
	<option value="478">Media Planning/Media Buying</option>
	<option value="500">Medical Administration</option>
	<option value="503">Medical Representative /Promotion Officer</option>
	<option value="499">Medical Research</option>
	<option value="493">Medical Technologist/Lab Operator</option>
	<option value="506">Medical Transcription</option>
	<option value="545">Medical Transcription</option>
	<option value="909">Medical Transcription</option>
	<option value="395">Merchandising</option>
	<option value="815">Merine Engineering</option>
	<option value="940">Micro Credit</option>
	<option value="873">Micro Finance</option>
	<option value="497">Micro-Biologist</option>
	<option value="687">MicroStation</option>
	<option value="948">MIS</option>
	<option value="792">MIS/CIS</option>
	<option value="511">Monitoring</option>
	<option value="622">MS Access</option>
	<option value="675">MS Exchange Server</option>
	<option value="1043">MS Navision</option>
	<option value="672">MS Project</option>
	<option value="678">MS Project Server</option>
	<option value="682">MS Small Business Servers</option>
	<option value="623">MS SQL Server</option>
	<option value="669">MS Visio</option>
	<option value="646">MS Word/Excel/PowerPoint/OneNote</option>
	<option value="448">Multimedia</option>
	<option value="802">Music/Dance</option>
	<option value="625">MySQL</option>
	<option value="438">Network Engineer/Network Administrator</option>
	<option value="860">Network Engineering</option>
	<option value="866">Neval/Marine</option>
	<option value="658">Novell</option>
	<option value="594">Novell Netware</option>
	<option value="491">Nurse</option>
	<option value="1001">Nutritionist</option>
	<option value="536">Office Assistant</option>
	<option value="417">Office Management</option>
	<option value="537">Office Manager</option>
	<option value="865">Oil Exploration/Mining</option>
	<option value="560">Online (web/e-mail) Support</option>
	<option value="647">OpenOffice</option>
	<option value="388">Operation &amp; Maintenance</option>
	<option value="393">Operator (CADD)</option>
	<option value="624">Oracle</option>
	<option value="1041">Oracle Application Server</option>
	<option value="568">Organization Development/Process Improvement</option>
	<option value="592">OS/2</option>
	<option value="1040">OsCommerce</option>
	<option value="665">PageMaker</option>
	<option value="492">Paramedics</option>
	<option value="494">Pathologist</option>
	<option value="570">Performance &amp; Career Management</option>
	<option value="824">Performance Appraisal</option>
	<option value="793">Performing Arts</option>
	<option value="1016">Perl</option>
	<option value="749">Personal Banking</option>
	<option value="534">Personal Secretary</option>
	<option value="868">Petrochemical</option>
	<option value="853">Pharmaceutical/Medical Marketing</option>
	<option value="495">Pharmacist</option>
	<option value="794">Pharmacy/ Micro Biology</option>
	<option value="932">Photograph</option>
	<option value="484">Photographer</option>
	<option value="822">Photography</option>
	<option value="643">PHP</option>
	<option value="1045">phpNuke</option>
	<option value="799">Physical Instructor</option>
	<option value="795">Physics/ Applied Physics</option>
	<option value="383">Placement/Career Counseling</option>
	<option value="386">Planning</option>
	<option value="1009">Planning</option>
	<option value="879">Policy Advocacy</option>
	<option value="892">Political Analysis</option>
	<option value="1030">PostgreSQL</option>
	<option value="876">Poverty Reduction</option>
	<option value="870">Power Generation</option>
	<option value="628">PowerBuilder</option>
	<option value="552">Pre Press  Design Operator</option>
	<option value="577">Pre Press Design</option>
	<option value="454">Pre Press Designer/Operator</option>
	<option value="674">Prince2</option>
	<option value="652">Printer Servers</option>
	<option value="399">Production</option>
	<option value="1014">Production</option>
	<option value="407">Production Management (Cutting)</option>
	<option value="411">Production Management (Dyeing &amp; Finishing)</option>
	<option value="409">Production Management (Finishing)</option>
	<option value="410">Production Management (Knitting &amp; Weaving)</option>
	<option value="408">Production Management (Sewing)</option>
	<option value="412">Production Management (Spinning)</option>
	<option value="942">Production Management (Washing)</option>
	<option value="418">Production/Operation Management</option>
	<option value="481">Program Management</option>
	<option value="929">Program Management</option>
	<option value="512">Program Officer/Manager</option>
	<option value="433">Programmer/Software Engineer</option>
	<option value="513">Project Coordinator/ Officer</option>
	<option value="391">Project Management</option>
	<option value="524">Project Management/ Co-ordinator</option>
	<option value="430">Project Manager (IT System)</option>
	<option value="429">Project Manager (Software)</option>
	<option value="1011">Protocol</option>
	<option value="796">Psychology</option>
	<option value="797">Public Administration</option>
	<option value="808">Public Administration</option>
	<option value="807">Public Health</option>
	<option value="838">Public Relation</option>
	<option value="463">Public Relation</option>
	<option value="397">Purchase</option>
	<option value="369">Purchase/Procurement</option>
	<option value="939">Python</option>
	<option value="557">QC (Quality Control) of Customer Service</option>
	<option value="435">Quality Assurance/ Quality Control</option>
	<option value="400">Quality Control/Audit</option>
	<option value="505">Quality Controller /Assurance</option>
	<option value="666">QuarkXpress</option>
	<option value="363">Re-Insurance</option>
	<option value="856">Real State Marketing</option>
	<option value="538">Reception</option>
	<option value="345">Recovery</option>
	<option value="753">Recovery</option>
	<option value="823">Recruitment</option>
	<option value="563">Recruitment &amp; Selection</option>
	<option value="1012">Relationship</option>
	<option value="466">Relationship Management/Key Account Management</option>
	<option value="841">Relationship Marketing</option>
	<option value="765">Remittance</option>
	<option value="529">Report Writing</option>
	<option value="515">Research</option>
	<option value="935">Research</option>
	<option value="522">Research Design/Analysis</option>
	<option value="525">Research Support</option>
	<option value="487">Researcher</option>
	<option value="336">Retail Banking</option>
	<option value="845">Retail Management</option>
	<option value="470">Retail Stores/Shops</option>
	<option value="758">Risk Management</option>
	<option value="610">RMI</option>
	<option value="1023">Ruby</option>
	<option value="671">RUP</option>
	<option value="881">Rural Development</option>
	<option value="458">Sales</option>
	<option value="389">Sales &amp; Marketing</option>
	<option value="502">Sales &amp; Marketing (Medical Services)</option>
	<option value="501">Sales &amp; Marketing (Pharmaceutical Products)</option>
	<option value="947">Sales/Marketing</option>
	<option value="877">Sanitation</option>
	<option value="900">Scietific Research</option>
	<option value="414">Security</option>
	<option value="419">Security Management</option>
	<option value="421">Security Management</option>
	<option value="453">Security Management of IT System</option>
	<option value="1013">Service/support</option>
	<option value="614">Servlets</option>
	<option value="581">Set Design</option>
	<option value="358">Share Department/Company Secretariat</option>
	<option value="680">SharePoint Portal Server</option>
	<option value="759">SME</option>
	<option value="338">SME Banking</option>
	<option value="882">Social Advancement</option>
	<option value="889">Social Research</option>
	<option value="798">Sociology/Social Welfare</option>
	<option value="861">Software</option>
	<option value="428">Software Architect</option>
	<option value="443">Software Implementation</option>
	<option value="593">Solaris</option>
	<option value="575">Special Effect (Computer Aided) Design</option>
	<option value="365">Specialized Leasing Operational (Monitoring/collection)</option>
	<option value="1031">SQLite</option>
	<option value="810">Statistics</option>
	<option value="398">Store</option>
	<option value="374">Store/Inventory</option>
	<option value="332">Strategic Planning</option>
	<option value="583">Strategic Planning</option>
	<option value="359">Structured Finance / Syndication</option>
	<option value="482">Studio Manager</option>
	<option value="930">Studio Mangement</option>
	<option value="516">Supervision</option>
	<option value="370">Supply Chain</option>
	<option value="390">Survey</option>
	<option value="523">Survey Design/Planning</option>
	<option value="526">Surveyor</option>
	<option value="611">SWINGS</option>
	<option value="651">Switches/Routers</option>
	<option value="627">Sybase</option>
	<option value="598">Symbion</option>
	<option value="767">Syndicated Loan Management</option>
	<option value="427">System Analyst</option>
	<option value="439">System Engineer (Computer Network &amp; System)</option>
	<option value="440">System Engineer (Telecommunication Network)</option>
	<option value="331">Tax (VAT/ Customs Duty/ Income Tax)</option>
	<option value="498">Teacher/Faculty</option>
	<option value="376">Teaching/Training</option>
	<option value="431">Team Leader (Software)</option>
	<option value="432">Technical Lead (Software)</option>
	<option value="452">Technical Sales/IT Marketing</option>
	<option value="446">Technical Writer/ Manual Writer</option>
	<option value="471">Tele Marketing</option>
	<option value="555">Tele Marketing</option>
	<option value="846">Tele Marketing</option>
	<option value="818">Telecommunication</option>
	<option value="862">Telecommunication</option>
	<option value="442">Telecommunication Engineer</option>
	<option value="849">Telecommunication Products &amp; Services</option>
	<option value="915">Telecommunication Service</option>
	<option value="540">Telephone Operator</option>
	<option value="356">Teller</option>
	<option value="434">Test Engineer</option>
	<option value="871">Textile</option>
	<option value="1008">Textile Engineering</option>
	<option value="656">Token Ring Network Designing</option>
	<option value="1018">Tomcat</option>
	<option value="384">TOT (Training of Teachers)</option>
	<option value="348">Trade Finance</option>
	<option value="760">Trade Finance</option>
	<option value="847">Trading/Wholesale/Indenting</option>
	<option value="472">Trading/Wholesale/Indenting</option>
	<option value="514">Trainer</option>
	<option value="447">Trainer/Faculty</option>
	<option value="828">Training</option>
	<option value="566">Training &amp; Development</option>
	<option value="533">Transcription</option>
	<option value="486">Translation</option>
	<option value="934">Translation</option>
	<option value="1010">Transport Management</option>
	<option value="919">Transport/Airline/Travel</option>
	<option value="750">Treasury</option>
	<option value="342">Treasury Operation</option>
	<option value="670">UML</option>
	<option value="762">Underwriting</option>
	<option value="364">Underwriting (Insurance)</option>
	<option value="591">Unix</option>
	<option value="1021">Unix Shell</option>
	<option value="600">VB.Net</option>
	<option value="640">VBScript</option>
	<option value="496">Veterinarian</option>
	<option value="603">Visual Basic 6.0</option>
	<option value="681">Visual SourceSafe</option>
	<option value="923">Visualization</option>
	<option value="475">Visualizer</option>
	<option value="688">VIZ Render</option>
	<option value="582">VLSI/Chip Design</option>
	<option value="1019">VoiceXML</option>
	<option value="657">VOIP Solutions</option>
	<option value="684">WAP</option>
	<option value="444">Web Developer/Web Designer</option>
	<option value="632">Web Services</option>
	<option value="1038">Web Sphere</option>
	<option value="1039">WebLogic</option>
	<option value="1004">Welfare</option>
	<option value="653">WiFi/BlueTooth</option>
	<option value="584">Windows 2000/2003 Server(s)</option>
	<option value="1036">Windows Administration</option>
	<option value="586">Windows CE/CE.Net</option>
	<option value="588">Windows NT</option>
	<option value="585">Windows XP/2000/ME/98</option>
	<option value="587">Windows XPe</option>
	<option value="1046">Wireless</option>
	<option value="638">WML</option>
	<option value="1026">WordPress</option>
	<option value="944">Work Study</option>
	<option value="635">XHTML</option>
	<option value="636">XML</option>
	<option value="1020">XML-RPC</option>
	<option value="639">XPath/XQuery/XLink/XPointer/XSL-FO</option>
	<option value="637">XSL</option>
	<option value="1022">XUL</option>
	<option value="597">Zeta</option>
	<option value="817">Zoology</option>
</select>
                                                </div>
                                                
                                                <div class="field-box">
                                                    <label>Skill Description:</label>
                                                    <textarea name="ctl00$MainBodyContent$SkillDescriptionText" rows="2" cols="20" id="MainBodyContent_SkillDescriptionText" class="form-control SkillDescriptionText" type="text" style="width: 400px;">
</textarea>
                                                </div>
                                                <div class="field-box">
                                                    <label>Extracurricular Activities :</label>
                                                    <textarea name="ctl00$MainBodyContent$extraCurricularText" rows="2" cols="20" id="MainBodyContent_extraCurricularText" class="form-control extraCurricularText" type="text" style="width: 400px;">
</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" name="ctl00$MainBodyContent$save_specilization_info" value="Save changes" id="MainBodyContent_save_specilization_info" class="btn btn-primary btnSpecilizationInfo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Language Modal-->
                        <div class="modal fade" id="languageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="trainingLabel">Entry Form - Language</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-wrapper">
                                            <div class="col-md-12" >
                                           
                                                <table id="MainBodyContent_languageTable" class="table table-hover table-striped">
	<tr>
		<th>Language</th>
		<th>Reading</th>
		<th>Writing</th>
		<th>Speaking</th>
	</tr>
	<tr>
		<td>
                                                                <input name="TitleText[]" id="MainBodyContent_langTitleText_1" class="form-control langTitleText_1" type="text" style="width: 200px;" /></td>
		<td>
                                                                <select name="ReadingText[]" id="MainBodyContent_langReadingText_1">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="langWrittingText[]" id="MainBodyContent_langWrittingText_1">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="SpeakingText[]" id="MainBodyContent_langSpeakingText_1">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
	</tr>
	<tr>
		<td>
                                                                <input name="TitleText[]" id="MainBodyContent_langTitleText_2" class="form-control" type="text" style="width: 200px;" /></td>
		<td>
                                                                <select name="ReadingText[]" id="MainBodyContent_langReadingText_2">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="langWrittingText[]" id="MainBodyContent_langWrittingText_2">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="SpeakingText[]" id="MainBodyContent_langSpeakingText_2">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
	</tr>
	<tr>
		<td>
                                                                <input name="TitleText[]" id="MainBodyContent_langTitleText_3" class="form-control" type="text" style="width: 200px;" /></td>
		<td>
                                                                <select name="ReadingText[]" id="MainBodyContent_langReadingText_3">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="langWrittingText[]" id="MainBodyContent_langWrittingText_3">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
		<td>
                                                                <select name="SpeakingText[]" id="MainBodyContent_langSpeakingText_3">
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>

		</select>
                                                            </td>
	</tr>
</table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" name="ctl00$MainBodyContent$saveLanguageInfo" value="Save changes" id="MainBodyContent_saveLanguageInfo" class="btn btn-primary btnLanguageInfo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reference Modal-->
                        <div class="modal fade" id="referenceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Entry Form - Reference</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-wrapper">
                                            <div class="col-md-12">
                                                <div class="field-box">
                                                    <label>Name:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$refNameText" id="MainBodyContent_refNameText" class="form-control refNameText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Organization:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$refOrganizationText" id="MainBodyContent_refOrganizationText" class="form-control refOrganizationText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Designation:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$refDesignationText" id="MainBodyContent_refDesignationText" class="form-control refDesignationText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Address:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$refAddressText" id="MainBodyContent_refAddressText" class="form-control refAddressText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Mobile:<span style="color: #ff0000;"> *</span></label>
                                                    <input name="ctl00$MainBodyContent$refMobileText" id="MainBodyContent_refMobileText" class="form-control refMobileText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Email:</label>
                                                    <input name="ctl00$MainBodyContent$refEmailText" id="MainBodyContent_refEmailText" class="form-control refEmailText" type="text" />
                                                </div>
                                                <div class="field-box">
                                                    <label>Relation:</label>
                                                    <div class="ui-select">
                                                        <select name="ctl00$MainBodyContent$refRelationText" id="MainBodyContent_refRelationText">
	<option value="Relative">Relative</option>
	<option value="Family Friend">Family Friend</option>
	<option value="Academic">Academic</option>
	<option value="Professional">Professional</option>
	<option value="Others">Others</option>

</select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" name="ctl00$MainBodyContent$SaveReference_Info" value="Save changes" id="MainBodyContent_SaveReference_Info" class="btn btn-primary btnReferenceInfo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-actions text-center">
                        <a style="margin-left: 15px;" href="Employment.aspx" class="btn-glow primary btn-prev pull-left"><i class="icon-chevron-left"></i>Prev</a>
                        
                        <a class="btn-glow primary btn-next pull-right" href="FileUpload.aspx" data-last="Finish">Next <i class="icon-chevron-right"></i></a>

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
            $(".select2").select2({
                placeholder: "Select a Category"
            });
            // datepicker plugin
            $('.input-datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
            $('.btnLanguageInfo').on("click", function () {
                jQuery('form').validate({
                    errorClass: "error"
                });

                jQuery('.langTitleText_1').rules('add', {
                    required: true
                });


                if ($('form').valid()) {
                    //alert("Hello");
                    $($get("saveLanguageInfo_Click")).click();
                } else {
                    // alert("Error");
                    e.preventDefault();
                    return false;
                }
            });

            $('.btnReferenceInfo').on("click", function () {
                jQuery('form').validate({
                    errorClass: "error"
                });

                jQuery('.refNameText').rules('add', {
                    required: true
                });

                jQuery('.refOrganizationText').rules('add', {
                    required: true
                });

                jQuery('.refDesignationText').rules('add', {
                    required: true
                });

                jQuery('.refAddressText').rules('add', {
                    required: true
                });

                jQuery('.refMobileText').rules('add', {
                    required: true,
                    number: true,
                    minlength: 11
                });

                //jQuery('.refEmailText').rules('add', {
                //    required: true,
                //    email: true
                //});


                if ($('form').valid()) {
                    //alert("Hello");
                    $($get("SaveReference_Info")).click();
                } else {
                    // alert("Error");
                    e.preventDefault();
                    return false;
                }
            });
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

