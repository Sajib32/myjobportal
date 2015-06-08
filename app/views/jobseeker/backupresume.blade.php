
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

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>


<title>Post Resume</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56024242-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
//
//	  var _gaq = _gaq || [];
//	  _gaq.push(['_setAccount', 'UA-36961160-1']);
//	  _gaq.push(['_trackPageview']);
//	
//	  (function() {
//		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//	  })();
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

<div class="wrapper_top">
                  <div class="container">
                     <div class="row">

                      <div class="col-md-9 col-sm-9 col-xs-12">
                           <div class="wrap_top_cont">
                                 <div class="top-menu">
                                   <div class="top_bar_jobs"><a href="http://joblist.bdjobs.com" class="">Jobs</a></div>
                                   &nbsp;
                                   <div class="top_bar_mybdj"><a href="http://mybdjobs.bdjobs.com/mybdjobs/" class="current">My Bdjobs</a></div>
                                   &nbsp;
                                   <div class="top_bar_train"><a href="http://bdjobstraining.com">Training</a></div>
                                   <div class="top_bar_divider"></div>
                                   <div class="top_bar_emp"><a href="http://corporate2.bdjobs.com">Employers</a></div>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="language-btn">
                           
                              <div style="float: right; margin-right: 5px;">
                                 
                                 <div class="switch_lan_wrap">
                                    <div class="s_left_box"><img src="http://mybdjobs.bdjobs.com/mybdjobs/images/S_W_E.gif"/></div>
                                    <div class="s_right_box"><a href="http://mybdjobs.bdjobs.com/bn/resumes/step_01bn.asp"><img src="http://mybdjobs.bdjobs.com/mybdjobs/images/S_B_B.gif" onmouseover="this.src='http://mybdjobs.bdjobs.com/mybdjobs/images/S_Br_B.gif';"
                                 onmouseout="this.src='http://mybdjobs.bdjobs.com/mybdjobs/images/S_B_B.gif';" alt="Bangla" title="Bangla"/></a></div>
                                </div>


                              </div>
                           </div>
                        </div>
                        


                     </div>
                  </div>
               </div>
   <div class='notifications top-left'></div>
   
                  </div>
 <!--- END OF NOTIFICATION BAR-->
    <div class="">
      <div class="container">
      
     <div class="row">
         <div class="col-sm-12 col-md-12">
           <a href="http://www.bdjobs.com"> <image class="logo" xlink:href="http://mybdjobs.bdjobs.com/mybdjobs/images/logo.svgz" src="http://mybdjobs.bdjobs.com/mybdjobs/images/logo.png" width="210" height="50" /></a>
         </div>
         </div>
      </div>
    </div>

<div class="">
                  <div class="container">
                  <div class="row">
                     <div class="col-md-12">

                        <nav class="navbar navbar-default navbar-customize" role="navigation">
                          <div class="container-fluid" style="padding-right: 0px;">
                            
                            <div class="navbar-header" style="border:none">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <div class="toggle-btn">
                                 <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </div>
                                Select Menu Item
                              </button>
                              
                            </div>

                          
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav nav-justified">
                                <li><a href="http://www.bdjobs.com">Home</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Links <span class="caret"></span></a>
                                  <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li><a href="http://joblist.bdjobs.com/OtherJobs.asp?JobType=new">New Jobs</a></li>
                                    <li><a href="http://joblist.bdjobs.com/OtherJobs.asp?JobType=deadline">Deadline Tomorrow</a></li>
                                    <li><a href="http://joblist.bdjobs.com/OtherJobs.asp?JobType=parttime">Part Time</a></li>
                                    <li><a href="http://joblist.bdjobs.com/OtherJobs.asp?JobType=contract">Contractual</a></li>
                                    <li><a href="http://joblist.bdjobs.com/OtherJobs.asp?JobType=government">Government</a></li>
                                    <li><a href="http://joblist.bdjobs.com/locationwisejobs.asp">Location Wise</a></li>
                                    <li><a href="http://joblist.bdjobs.com/locationwisejobs.asp?jobtype=overseas">Overseas</a></li>
                                  </ul>
                                </li>
                                <li><a href="http://joblist.bdjobs.com/Company_list.asp">Companies Jobs</a></li>
                                <li><a href="http://www.bdjobs.com/career/counsel.asp">Career Counselling</a></li>
                                <li style="border:none"><a href="http://mybdjobs.bdjobs.com/mybdjobs/faq.asp">FAQ</a></li>
                              </ul>
                            </div>
                          </div>
                        </nav>

                     </div>
                     </div>
                  </div>
               </div>
               <!--- START MENU NEV AREA-->
                <div class="steps-area">
                     <div class="container">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="btn-group step_btns">
                                 <button class="btn btn-default step_btn">
                                    <p class="step_circle">01</p> 
                                    <p class="step_title">Personal</p>
                                 </button>

                                 <button class="btn btn-default step_btn_disable">
                                    <p class="step_circle">02</p> 
                                    <p class="step_title">Education/Training</p>
                                 </button>

                                 <button class="btn btn-default step_btn_disable">
                                    <p class="step_circle">03</p> 
                                    <p class="step_title">Employment</p>
                                 </button>

                                 <button class="btn btn-default step_btn_disable">
                                    <p class="step_circle">04</p> 
                                    <p class="step_title">Others</p>
                                 </button>

                                 <button class="btn btn-default step_btn_disable">
                                    <p class="step_circle">05</p> 
                                    <p class="step_title">Photograph</p>
                                 </button>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="container">
                        <div class="col-md-12">
                        </div>
                     </div>
                  </div>
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
                  <p>Nationality:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input type="checkbox"  class="email-notification-checkbox icon" style="float:left" name="txtNationality" onClick="DisableNationality();" value="Bangladeshi"  id="bangladeshi">
                  <div style="margin: 0px 0px 0px 20px;">
                    <p>Bangladeshi</p>
                  </div>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <input class="form-control from-control-modal nationality" placeholder="For other Country Please Type" type="text" name="txtNationality" id="otherNationality" value=""  >
                  <span class="required"></span>
                </div>
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
          <div class="modal-dialog" style="width: 100%; margin-top: 20px;">
            <div class="modal-title-top modal-header" style="text-align: left;">
              <h4 class="modal-title title-custom" id="myModalLabel" style="padding-left: 10px;">Career and Application Information</h4>
            </div>
            <div class="row modal-row">
            <div class="container-fluid">
                <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
                  <p>Objective:</p>
                </div>
                <div class="col-md-9 col-xs-9 field-mobile-view">
                  <textarea class="form-control from-control-modal" placeholder="" type="text" style="height: 150px;" id="txtObjective" maxLength="250" size="80" name="txtObjective" ></textarea>
                  
              </div>
            </div>
            </div>
           </div> 
           
          
          <!--- END ORGANIZATION TYPE--> 
        
        <div class="modal-dialog" style="width: 100%; margin-top: 20px;">


      <!--- END ORGANIZATION TYPE--> 

    <div class="modal-dialog" style="width: 100%; margin-top: 20px;">
      <div class="modal-title-top modal-header" style="text-align: left;">
        <h4 class="modal-title title-custom" id="myModalLabel" style="padding-left: 10px;">Other Relevant Information</h4>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
            <p>Career Summary:</p>
          </div>
          <div class="col-md-9 col-xs-9 field-mobile-view">
            <textarea class="form-control from-control-modal" placeholder="" type="text" id="txtCareerSummary" name="txtCareerSummary" onKeyUp="countLetter(this.id , 490 , 'CADD_sp1' , 'Career Summary' , 1)" onChange="countLetter(this.id , 490 , 'CADD_sp1' , 'Career Summary' , 1 );" style="height: 120px;"></textarea>

        </div>
      </div>
      <div class="row modal-row">
        <div class="container-fluid">
          <div class="col-md-3 col-xs-3 field-title field-mobile-view-title">
            <p>Spacial Qualification:</p>
          </div>
          <div class="col-md-9 col-xs-9 field-mobile-view">
            <textarea class="form-control from-control-modal" id="txtSpecialQualification" name="txtSpecialQualification" onKeyUp="countLetter(this.id , 245 , 'CADD_sp2' , 'Special Qualification' , 1)" onChange="countLetter(this.id , 245 , 'CADD_sp2' , 'Special Qualification' , 1 )"  placeholder="" type="text" style="min-height: 120px;"></textarea>

        </div>
      </div>

    </div>
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
            <p>Please accept following terms and conditions before submitting your CV at Bdjobs.com CV Bank.</p>
            <ul style="list-style: none;">
              <li> 1. The CV can be viewed by any corporate client of Bdjobs.com (unless you change that feature from MyBdjobs control panel). </li>
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
<div class="row">
  <div class="container">
    <div class="col-md-12 footer-ad">
<script type="text/javascript"><!--
    google_ad_client = "ca-pub-5130888087776673";  
	/* HorizontalLeaderboardMbdj */  
    google_ad_slot = "2949535947"; 
    google_ad_width = 728;
    google_ad_height =  90; 
    //-->
    </script> 
<script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
</div>
  </div>
</div>
<!--- END FOOTER ADVERTISMENT--> 
<!-- START FOOTER AD MOBILE-->
<div class="row">
  <div class="container">
    <div class="col-md-12 footer-ad-mobile">
    
<script type="text/javascript"><!--
    google_ad_client = "ca-pub-5130888087776673";  
	/* HorizontalHalfBanner */  
    google_ad_slot = "9158813540"; 
    google_ad_width = 234;
    google_ad_height =  60; 
    //-->
    </script> 
<script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
   
     </div>
  </div>
</div>
<!-- END FOOTER AD MOBILE-->
<div class="footer" style="margin-top:10%;">
         <div class="container footer-padding">
            <div class="col-md-3 footer-01">
               <h3>About Us</h3>
               <a href="http://www.bdjobs.com/about.asp" target="mine">
                  <p>About Bdjobs.com</p>
               </a>
               <a href="http://www.bdjobs.com/tos.asp" target="mine">
                  <p>Terms & Conditions</p>
               </a>
               <a href="#" class="showintp">
                  <p>International Partners</p>
               </a>
               <div class="intp">
                  <ul>
                     <li><a href="http://home.catho.com.br/" target="_blank">Catho.com.br <strong>Brazil</strong></a></li>
                     <li><a href="http://www.manager.com.br/" target="_blank">Manager.com.br <strong>Brazil</strong></a></li>
                     <li><a href="http://www.zhaopin.com/" target="_blank">Zhaopin.com <strong>China</strong></a></li>
                     <li><a href="https://www.occ.com.mx/" target="_blank">OCCMundial.com <strong>Mexico</strong></a></li>
                     <li><a href="http://www.jobsdb.com/" target="_blank">JobsDB.com <strong>S.E Asia</strong></a></li>
                     <li><a href="http://www.jobstreet.com/" target="_blank">Jobstreet.com <strong>S.E Asia</strong></a></li>
                     <li><a href="http://www.brightermonday.com/" target="_blank">Brightermonday.com <strong>East Africa</strong></a></li>
                     <li><a href="http://www.jobberman.com/" target="_blank">Jobberman.com <strong>West Africa</strong></a></li>
                     <li><a href="http://www.jobseeker.co.uk/" target="_blank">Jobseeker.co.uk <strong>United Kingdom</strong></a></li>
                     <li><a href="http://www.jobseeker.com.au/" target="_blank">Jobseeker <strong>Global</strong></a></li>
                     <li><a href="http://www.seek.com.au/" target="_blank">SEEK International <strong>Australia</strong></a></li>
                  </ul>
               </div>
               <a href="http://www.bdjobs.com/contact.htm">
                  <p>Contact Us</p>
               </a>
            </div>
            <div class="col-md-3 footer-01">
               <h3>Job Seekers</h3>
               <a href="http://www.mybdjobs.bdjobs.com/resumes/step_01.asp">
                  <p>Post Resume</p>
               </a>
               <a href="http://www.bdjobs.com/career/counsel.asp">
                  <p>Career Counseling</p>
               </a>
               <a href="http://www.mybdjobs.bdjobs.com/">
                  <p>My Bdjobs</p>
               </a>
               <a href="http://mybdjobs.bdjobs.com/mybdjobs/faq.asp">
                  <p>FAQ</p>
               </a>
            </div>
            <div class="col-md-3 footer-01">
               <h3>Employers</h3>
               <a href="http://corporate2.bdjobs.com/Corporate_NewAccount.asp" target="mine">
                  <p>Create Account</p>
               </a>
               <a href="http://corporate2.bdjobs.com/services.asp" target="mine">
                  <p>Products/Service</p>
               </a>
               <a href="http://corporate2.bdjobs.com/" target="mine">
                  <p>Post a Job</p>
               </a>
               <a href="http://corporate2.bdjobs.com/faq.asp" target="mine">
                  <p>FAQ</p>
               </a>
            </div>
            <div class="col-md-3 footer-01">
               <h3>Tools & Social Media</h3>
               <a href="http://forum.bdjobs.com" target="mine"><p>Bdjobs Forum</p></a>
        <a href="https://www.facebook.com/mybdjobs" target="mine"> <p>Facebook</p></a>
        <a href="http://joblist.bdjobs.com/feedback.asp" target="mine"><p>Feedback</p></a>
        <!--<a href="https://play.google.com/store/apps/details?id=com.mcc.bdjobs" target="mine"><p>Mobile App</p></a>-->
               <p></p>
            </div>
         </div>
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
</div>
</body>
</html>