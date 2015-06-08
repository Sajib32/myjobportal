
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7]>      
   <html class="no-js lt-ie9 lt-ie8 lt-ie7">
      <![endif]-->
<!--[if IE 7]>         
      <html class="no-js lt-ie9 lt-ie8">
         <![endif]-->
<!--[if IE 8]>         
         <html class="no-js lt-ie9">
            <![endif]-->
<!--[if gt IE 8]><!--> 
            <html class="no-js">
               <!--<![endif]-->
<head>
<script src="{{ URL::asset('js/widgets.js') }}"></script>
 <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/flexslider.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/responsive.css') }}

{{ HTML::style('assets/css/seekerfooter.css') }}
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>


<title>Post Resume</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/style-resume.css') }}">
<!-- Responsive StyleSheet -->
<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/datepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/catagory.css') }}">
<!-- Google Fonts -->


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<script src="{{ URL::asset('js/jquery-2.0.2.js') }}"></script>

<SCRIPT language="JavaScript" src="{{ URL::asset('js/step_01_common.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/common.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/validation.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/personal_Edit.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/charCount.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/_DateValidation.js') }}"></SCRIPT>
<SCRIPT language="JavaScript" src="{{ URL::asset('js/common_new.js') }}"></SCRIPT>

  <script type="text/javascript">

  function CheckPassword(password)
  {
    var strength = new Array();
    var button=document.getElementById("Continue");
    var text = document.getElementById("PasswordStrength");
    var passwordTextbox= document.getElementById("txtPassword");
    strength[0] = "Blank";
    strength[1] = "Very Weak";
    strength[2] = "Weak";
    strength[3] = "Medium";
    strength[4] = "Strong";
    strength[5] = "Very Strong";
    
    var score = 1;
    
    
    if (password.length < 1)
    {
      text.style.color="#ff6666";   
      text.style.fontWeight="bold";
      passwordTextbox.style.backgroundColor="#F0EE86";
      return strength[0]; 
    } 
    
    if (password.length < 4)
    { 
      text.style.color="#ff6666";   
      text.style.fontWeight="bold";
      passwordTextbox.style.backgroundColor="#F0EE86";  
      return strength[1];
    }
    if (password.length < 8)
    { 
      text.style.color="#ff6666";   
      text.style.fontWeight="bold";
      passwordTextbox.style.backgroundColor="#F0EE86";  
      score++;
    
    }
    if ((password.length >= 8 &&  password.length <= 12)&& password.match(/^[a-zA-Z]\d{3}$/) )
    {
      text.style.color="#ff6666";
      text.style.fontWeight="bold";
      password.style.backgroundColor="#F0EE86"; 
      score++;
    }
    if ((password.length >= 8 &&  password.length <= 12)&& (password.match(/^[a-zA-Z]\d{3}$/)|| (password.match(/[a-z]/) || password.match(/[A-Z]/)) ) )
    {
      text.style.color="Green";
      text.style.fontWeight="bold";
      passwordTextbox.style.backgroundColor="#F0EE86";
      score++;
    }
    if ((password.length >= 8 &&  password.length <= 12) &&( password.match(/^[a-zA-Z]\d{3}$/) ||(password.match(/[a-z]/) || password.match(/[A-Z]/)) || password.match(/^[0-9]+$/) ))
    {
      text.style.color="Green"
      text.style.fontWeight="bold"
      passwordTextbox.style.backgroundColor="#FFF";
      score++;
    }
    
    if ((password.length >= 8 &&  password.length <= 12) &&( password.match(/^[a-zA-Z]\d{3}$/) ||(password.match(/[a-z]/) || password.match(/[A-Z]/)) || password.match(/^[0-9]+$/)|| password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,£,(,)]/)||password.match(/\d+/) ))
    {
      text.style.color="Green";
      text.style.fontWeight="bold";
      passwordTextbox.style.backgroundColor="#FFF";
      score++;
    }
    
    return strength[score];
  
  }

    


    function PasswordChanged(field)

    {

        var span = document.getElementById("PasswordStrength");

        span.innerHTML = CheckPassword(field.value);

    }

 
    function ButtonClicked(field)
    {

        var strength = document.getElementById("PasswordStrength").innerHTML;

         

        if (strength.indexOf("Strong") < 0)

        {
            alert("Password is not strong enough!");

            return false;

        }

    }
    function CheckREPassword()
      {
    var password= document.getElementById("txtPassword");
    var rePassword= document.getElementById("txtRetypePassword");
    var badColor="#ff6666";
    var textBdColor="#F0EE86"
    var mess=document.getElementById("PasswordCheck");
    if (password.value!=rePassword.value)
    {
      rePassword.style.backgroundColor = textBdColor;
      mess.style.color = badColor;
      mess.style.fontWeight="bold";
      mess.innerHTML = "Passwords do not match!";
    
    }
    else
    {
      rePassword.style.backgroundColor = "#FFF";
      mess.innerHTML = " ";
    
    }
      }
     function Check_TermsAndCondition(value)
      {
          
        
    if (document.getElementById("checkCodition_01").checked)
    { 
      document.getElementById("Continue").disabled=true;
    
      //document.getElementById("Continue").className="BDJtabDisabled";
    }
    else
      {
      if (document.getElementById("checkCodition").checked)
      { 
        document.getElementById("Continue").disabled=false;
        document.getElementById("Continue").className="btn view-btn";
      }
      else
      {
        document.getElementById("Continue").disabled=true;
      
        //document.getElementById("Continue").className="BDJtabDisabled";
      
      }
    }
       }
   </script>
<script type="text/javascript">
//
//    var _gaq = _gaq || [];
//    _gaq.push(['_setAccount', 'UA-36961160-1']);
//    _gaq.push(['_trackPageview']);
//  
//    (function() {
//    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//    })();
//  
  </script>

</head>

<body>
<noscript>
  <style>
.c1{
  position:fixed;
  background-color:#AE0000;
  text-align:center;
  width:100%;
  height:21px;
  color:#FFF;
  font-size:13px;
  font-weight:bold;
  font-family:Arial, Helvetica, sans-serif;
  top:0;
  padding-top:3px;
  margin-top:6px;
  z-index: 101;
  }
 </style>
 <noscript>
<div class="c1">

This site works best with Javascript enabled. Your browser's Javascript is disabled.To enable <a href="EnablingJSTbl.asp" target="_blank" style="color:#0FF;">click here</a>

</div>
</noscript>


    



</noscript>


   <div class='notifications top-left'></div>
   
                  </div>
 <!--- END OF NOTIFICATION BAR-->


               <!--- START MENU NEV AREA-->       
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
            <li class="active has-submenu">
              <a href="index.html">Home</a>
              <ul>
                <li><a href="index.html">Home with Boxes</a></li>
                <li><a href="homepage-slider.html">Home with Slider</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="jobs.html">Jobs</a>
              <ul>
                <li><a href="jobs.html">Jobs Listings</a></li>
                <li><a href="jobs-single.html">Jobs Details</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="candidates.html">Candidates</a>
              <ul>
                <li><a href="candidates.html">Candidates Listings</a></li>
                <li><a href="candidates-sidebar.html">Candidates Listings Sidebar</a></li>
                <li><a href="candidates-single.html">Candidates Details</a></li>
              </ul>
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

  </header> <!-- end #header -->
                  <!--- START MENU NEV AREA-->
             
         <FORM id="table1" action="{{ URL::route('jobseeker-resume-post') }}" method="post">
  <div class="">
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row" style="background-color: #fff; margin-left: 0px; margin-bottom: 25px; border-radius: 4px 4px 0px 0px;">
          <div class="modal-dialog" style="width: 100%; margin-top: 0px;">
            <div class="modal-title-top modal-header" style="text-align: left; border-radius: 4px 4px 0px 0px;">
              <h4 class="modal-title title-custom" id="myModalLabel" style="padding-left: 10px;">Personal Details</h4>
            </div>
            <div class="row modal-row">
              <div class="container-fluid" style="float:right;">
                <div class="col-md-12 col-xs-12" style="margin-bottom: 15px; padding-right: 40px;">
                  <div class="required-message" style="margin-right: 10px; font-weight: bold;"><span style="color: #cc443d;">*</span><i>Required Fields</i></div>
                  <div class="required-message" style="font-weight: bold;"><span style="color: #69aa44; ">*</span><i>Special Instructions</i></div>
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Name:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text" name="txtName" id="txtName" value="" >
                  <span class="required"></span> 
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Father's Name:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text" name="txtFName"  id="txtFName" value="">
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Mother's Name:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text"  name="txtMName"  id="txtMName" value="">
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Date of Birth:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal datepicker" placeholder="MM/DD/YYYY" type="text" id="cboBDate" name="cboBDate" style="padding-left: 15px;"value="">
                  <span class="required"></span> </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Gender:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <select required="required"  class="form-control from-control-modal combo" id="cboGender"  name="cboGender" >
                    <OPTION value="-1" selected>Select</OPTION>
                    <OPTION value="Male" >Male</OPTION>
                    <OPTION value="Female" >Female</OPTION>
                  </select>
                  <span class="required"></span> 
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Marital Status:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <select required="required"  class="form-control from-control-modal combo" id="cboMStatus" name="cboMStatus" >
                    <OPTION value="-1" selected>Select</OPTION>
                    <OPTION value="2" >Unmarried</OPTION>
                    <OPTION value="1" >Married</OPTION>
                    <OPTION value="3" >Single</OPTION>
                  </select>
                  <span class="required"></span> </div>
              </div>
            </div>
          
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>National ID No:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text" id="txtNationalId"  name="txtNationalId" onKeyPress="return blockNonNumbers(this,event,true,false);" value="" >
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Religion:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text" id="txtReligion"  name="txtReligion" value="">
                </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Present Address:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <textarea class="form-control from-control-modal text-area" type="text" id="txtPresentAdd" maxLength="250"  size="80" name="txtPresentAdd"  ></textarea>
                  <span class="required"></span> </div>
              </div>
            </div>
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Permanent Address:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <textarea class="form-control from-control-modal text-area" type="text" id="txtPermanentAdd" maxLength="250"  size="80" name="txtPermanentAdd"></textarea>
                </div>
              </div>
            </div>
            
           
            <div class="row modal-row">
              
            </div>
           
            <div class="row modal-row">
    <div class="container-fluid">
      <div class="col-md-3 col-xs-3 field-title">
        <p>Mobile :</p>
      </div>
      <div class="col-md-9 col-xs-9">
        <input class="form-control from-control-modal" placeholder="Mobile ..." type="text" id="txtMobile"  name="txtMobile" value="">
        <span style="color: #69aa44; ">*</span> </div>
    </div>
  </div>
   
            <div class="row modal-row">
              <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Email:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal" placeholder="" type="text" id="txtEmail1"  name="txtEmail1" value="" >
                  <span class="required"></span> </div>
              </div>
            </div>
            
          </div>
     
          
          <!--- END ORGANIZATION TYPE--> 
        
        <div class="modal-dialog" style="width: 100%; margin-top: 20px;">


      <!--- END ORGANIZATION TYPE--> 

    <div class="modal-dialog" style="width: 100%; margin-top: 20px;">
     
      <div class="row modal-row">
     
      
    <div class="modal-dialog" style="width: 100%; margin-top: 20px;">
      <div class="modal-title-top modal-header" style="text-align: left;">
        <h4 class="modal-title title-custom" id="myModalLabel" style="padding-left: 10px;">Provide Password to edit/update your resume</h4>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-3 col-sm-3 col-xs-3 field-title field-mobile-view-title">
            <p>User Name :</p>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 user-form">
            <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-12 field-mobile-view">
                <input class="form-control from-control-modal" placeholder="" type="text" id="txtUserName" maxLength="15" name="txtUserName" onFocus="document.getElementById('spnCheck').style.fontWeight='bold';document.getElementById('spnCheck').style.fontSize='12'"  value=""   onblur="CheckUserName1(this.value)" >
                <span class="required"></span><br>
                <Span id ="message"></Span>
              </div>
              
              <div class="col-md-4 col-sm-7 col-xs-12 note-texts">
                <p style="font-size: 13px; font-weight: normal;"> [Use at least 5 to 15 characters.] </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
            <p>Password :</p>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 user-form">
            <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-12 field-mobile-view">
                <input class="form-control from-control-modal" placeholder=""  id="txtPassword" type="password" maxLength="12"  name="txtPassword" value="" onkeyup="PasswordChanged(this)"> <span class="required"></span>&nbsp;<br><span id="PasswordStrength"></span>
               
              </div>
              <div class="col-md-4 col-sm-7 col-xs-12 note-texts">
                <p style="font-size: 13px; font-weight: normal;"> [Use at least 8 to 12 characters.]<br/><span id="spnCheck" name="spnCheck"></span> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
            <p>Retype Password :</p>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9 user-form">
          <div class="row">
           <div class="col-md-5 col-sm-5 col-xs-12 field-mobile-view">
            <input class="form-control from-control-modal" placeholder=""  id="txtRetypePassword" type="password" maxLength="12" size="14" name="txtRetypePassword" value=""    onBlur="CheckREPassword()">&nbsp;<span id="PasswordCheck"></span>
            <span class="required"></span>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-dialog" style="width: 100%; margin-top: 20px;">
      <div class="modal-title-top modal-header" style="text-align: left;">
        <h4 class="modal-title title-custom" id="myModalLabel" style="padding-left: 10px;">Terms And Condition</h4>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-12 col-xs-12 field-title field-mobile-view-title" style="text-align: left; padding-left: 25px;">
            <p>Please accept following terms and conditions before submitting your CV at jobportal.com CV Bank.</p>
            <ul style="list-style: none;">
              <li> 1. The CV can be viewed by any corporate client of jobportal.com (unless you change that feature from the control panel). </li>
              <li> 2. Your CV will be automatically de-activated if you don't update it once in every six (6 ) months. </li>
            </ul>
          </div>
          <div class="col-md-12 col-xs-12">
            <div class="field-mobile-view" style="margin: 0 auto; width: 250px;">
              <div style="float: left; margin-right: 10px; margin-bottom: 10px;">
                <input type="radio" id="checkCodition" name="checkCodition" value="0" class="email-notification-checkbox checkbox-style" onClick="Check_TermsAndCondition(this.value);" >
                <span style="font-weight: bold;">I agree</span> </div>
              <div style="float: left; margin-right: 10px;">
                <input type="radio" id="checkCodition_01" name="checkCodition" value="0"  class="email-notification-checkbox checkbox-style" onClick="Check_TermsAndCondition(this.value);"  checked>
                <span style="font-weight: bold;">I do not agree</span>
                <div style="margin-top: 20px; margin-bottom: 20px;">
                  <button type="submit" id="Continue" class="btn view-btn" disabled><i class="glyphicon glyphicon-circle-arrow-right btn-padding icon-padding"></i>Continue</button>
                  {{ Form::token() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</FORM>
<!--- STAT FOOTER ADVERTISMENT-->

  
<!--- END FOOTER ADVERTISMENT--> 
<!-- START FOOTER AD MOBILE-->

<!-- END FOOTER AD MOBILE-->
<div id="main-wrapper">
 <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-4">
          <div class="widget">
            <div class="widget-content">
              {{ HTML::image('/assets/images/header-logo.png', '', array('width'=>'205px','height'=>'50px')) }}
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

      </div>
    </div>
  </footer>

</div>
<!--- END FOOTER AREA-->
<div class="scroll-top-wrapper "> <span class="scroll-top-inner"> <i class="glyphicon glyphicon-circle-arrow-up"></i> </span> </div>
<!-- JQUERY OFFICIAL CDN --> 
<!-- BOOSTRAP JQUERY SCRIPT -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!--- CUSTOM JQUERY SCRIPTS -->
<script src="{{ URL::asset('js/responsive-tabs.js') }}"></script>
<!--- CUSTOM JQUERY SCRIPTS --> 
<!-- GO TO TOP--> 
<script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>

<script>
                     $(function(){
                      
                         $(document).on( 'scroll', function(){
                      
                             if ($(window).scrollTop() > 100) {
                                 $('.scroll-top-wrapper').addClass('show');
                             } else {
                                 $('.scroll-top-wrapper').removeClass('show');
                             }
                         });
                      
                         $('.scroll-top-wrapper').on('click', scrollToTop);
                     });
                      
                     function scrollToTop() {
                         verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                         element = $('body');
                         offset = element.offset();
                         offsetTop = offset.top;
                         $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                     }
           $( document ).ready(function() {
  $('.datepicker').datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function(ev){
    $(this).datepicker('hide');
});
});

$(function(){
// Enabling Popover 
    $("[data-toggle=popover]").popover();

   
});

   $(document).ready(function() {
    $('.intp').hide();
        $('.showintp').click(function() {
                $('.intp').slideToggle(500);
        $("html, body").animate({ scrollTop: $(document).height() }, 500);
        });
    $('.intp ul li').click(function() {
                $('.intp').slideUp(500);
        });
    });

                  </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
{{ HTML::script('assets/js/jquery.ba-outside-events.min.js') }}
{{ HTML::script('assets/js/jquery.responsive-tabs.js') }}
{{ HTML::script('assets/js/jquery.flexslider-min.js') }}
{{ HTML::script('assets/js/jquery-ui-1.10.4.custom.min.js') }}
{{ HTML::script('assets/js/script.js') }}

</div>
</body>
</html>