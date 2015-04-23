
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>bdjobs.com :: Largest Job Site in Bangladesh</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!-- Main Styleshet -->
<link rel="stylesheet" href="{{ URL::asset('css/style-resume.css') }}">
<!-- Responsive StyleSheet -->
<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/lib/font-awesome.css') }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>
<script language="JavaScript">
	function SubmitForm()
	{
		//alert(document.getElementById("U_ID").value);
		document.getElementById("AplyForm").submit();
	}
</script>

<script src="{{ URL::asset('js/jquery-2.0.2.js') }}"></script>
<!-- BOOSTRAP JQUERY SCRIPT -->

<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/responsive-tabs.js') }}"></script>

<!--- CUSTOM JQUERY SCRIPTS -->
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/common.js') }}"></script>
<script src="{{ URL::asset('js/lightbox-form.js') }}"></script>
<script src="{{ URL::asset('js/Load_by_ajax_new.js') }}"></script>
<script src="{{ URL::asset('js/jquery-1.8.0.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.fancybox.js') }}"></script>


<!-- <link rel="stylesheet" href="dist/ladda-themeless.min.css">
<script src="dist/spin.min.js"></script>
<script src="dist/ladda.min.js"></script>-->
<link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.css?v=2.1.0') }}" media="screen">
<script type="text/javascript">
		$(document).ready(function () {
  	$(".fancybox").fancybox({
		openEffect : 'elastic',
		openSpeed  : 600,
		closeEffect : 'elastic',
		closeSpeed  : 600 ,
		closeClick : true,
		'scrolling'  : 'yes',
		 'type' : 'inline',
         helpers   : { 
		   overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox 
  		}
	 });
});			
                     
</script>
<script>
  $(function(){
   
	  $(document).on( 'scroll', function(){
   
		  if ($(window).scrollTop() > 100) {
			  $('.scroll-top-wrapper').addClass('show');
		  } else {
			  $('.scroll-top-wrapper').removeClass('show');
		  }
	  });
  });
</script>
<!-- GO TO TOP-->
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
</script>
<script>
   // $("#loading-example-btn").click(function() {
//                         var $btn = $(this);
//                         $btn.button('loading');
//                         // simulating a timeout
//                         setTimeout(function () {
//                             $btn.button('reset');
//                         }, 1000);
//                     });
//               </script>
<script>
//
  // Bind normal buttons
  //Ladda.bind( '.button-demo button', { timeout: 2000 } );
//
//                  // Bind progress buttons and simulate loading progress
//                  Ladda.bind( '.progress-demo button', {
//                     callback: function( instance ) {
//                        var progress = 0;
//                        var interval = setInterval( function() {
//                           progress = Math.min( progress + Math.random() * 0.1, 1 );
//                           instance.setProgress( progress );
//
//                           if( progress === 1 ) {
//                              instance.stop();
//                              clearInterval( interval );
//                           }
//                        }, 200 );
//                     }
//                  } );

  // You can control loading explicitly using the JavaScript API
  // as outlined below:

  // var l = Ladda.create( document.querySelector( 'button' ) );
  // l.start();
  // l.stop();
  // l.toggle();
  // l.isLoading();
  // l.setProgress( 0-1 );

  </script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>


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

<body>

<SCRIPT language="javascript">
	var msgEdu="Are you sure, you want to delete this Academic Qualification?";
	var msgTra="Are you sure, you want to delete this Training Record?";
	var msgPro="Are you sure, you want to delete this Professional Qualification?";
	var tableEdu="Education";
	var tableTra="Training";
	var tablePro="Profession";
    
     
	function PassUserID(str1) 
	{
     document.getElementById('hPS').value=str1;
	 document.getElementById('formPS_View').submit();
	}
   function removeHand(btnName)
	{
	 thisbtn = document.getElementById(btnName) ;
       if (thisbtn!=null)
        {
			if(thisbtn.disabled == true )
			{			
			  thisbtn.style.cursor = "default" ;
			}//if(thisbtn.disabled = true )
			else
			{
			  thisbtn.style.cursor = "hand" ;
			}//else
       }
	}//function removeHand(btnName)

 function displayMessageFromIframeChild(msg)  
        {  
            $('#Divaca').append(msg+'');  
        }  
function submitbox()
{
   alert("aa");
    $("#Divaca").load(location.href + " #Divaca >");



}

</SCRIPT> 
<script language="javascript"> 
	removeHand('cmdRemove1') ;
    removeHand('cmdRemove2') ;
    removeHand('cmdRemove3') ;
</script>
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
         <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="wrap_top_cont">
               <div class="top-menu">
                  <div class="top_bar_jobs"><a href="http://joblist.bdjobs.com" class="">Jobs</a></div>
                  &nbsp;
                  <div class="top_bar_mybdj"><a href="#" class="current">My Bdjobs</a></div>
                  &nbsp;
                  <div class="top_bar_train"><a href="http://bdjobstraining.com">Training</a></div>
                  <div class="top_bar_divider"></div>
                  <div class="top_bar_emp"><a href="http://corporate2.bdjobs.com">Employers</a></div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="language-btn">
               <div style="float: right;">
                  <div class="switch_lan_wrap">
                     <div class="s_left_box"><img src="http://mybdjobs.bdjobs.com/mybdjobs/images/S_W_E.gif"/></div>
                     <div class="s_right_box"><a href="http://mybdjobs.bdjobs.com/bn/mybdjobs/step_02_viewbn.asp"><img src="http://mybdjobs.bdjobs.com/mybdjobs/images/S_B_B.gif" onmouseover="this.src='http://mybdjobs.bdjobs.com/mybdjobs/images/S_Br_B.gif';"
                        onmouseout="this.src='http://mybdjobs.bdjobs.com/mybdjobs/images/S_B_B.gif';" alt="Bangla" title="Bangla"/></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

 <div class='notifications top-left'></div>
<div class="">
  <div class="container">
    <div class="col-md-6 col-sm-6">
        <div class="row">
          <a href="http://www.bdjobs.com/">
          <image class="logo" xlink:href="http://mybdjobs.bdjobs.com/mybdjobs/images/logo.svgz" src="http://mybdjobs.bdjobs.com/mybdjobs/images/logo.png" width="210" height="50" />
          </a>
        </div>
     </div>
      
      <div class="user-panel">
                        <div class="col-md-6 col-sm-6">
                          <div class="row">
                        
                           <img src="http://mybdjobs.bdjobs.com/mybdjobs/images/male.png" class="img-circle profile-pic">
                            {{ Auth::jobseeker()->get()->fullname }}
                           <span style="margin-right: 10px; font-weight: normal;"></span>
                         <a href="{{ URL::route('jobseeker-sign-out') }}">
                           <button type="button" class="btn btn-default nav-btn">
                           <i class="glyphicon glyphicon-off"></i> Sign Out
                           </button>
                           </a>
                     
                           </div>
                        </div>
                     </div>
                        
  </div>
<!--- END OF LOGO AREA-->
<!--- START MENU NEV AREA-->


<div class="container">
  
                     <div class="col-md-12">
                        <div class="row">
                        <nav class="navbar navbar-default navbar-customize" role="navigation">
                          <div class="container-fluid" style="padding-right: 0px;">
                            <!-- Brand and toggle get grouped for better mobile display -->
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

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav nav-justified">
                                <li><a href="welcome.asp">Home</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Links <span class="caret"></span></a>
                                  <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?]E_n[&be_=]p^T_o^?`s\.\bcJbebt]=bgapZs`o\d_y_=[e_&boZ.bb^j\bcsbo]dcyb=\r_9`b]`c_cb``cc`[`d^Nb=`vbw[n^eay`bbJ\p^a_s[oar^h[O_e`a^&]b\jbb_m_r\s]m\cas]ocdc.`bajabZm_f^&a1]6a4^4\5a8\0_=ai7">New Jobs</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?_N`=\v_ebicd]ea=\p^T]o_?\s\.ab^J]e[t^=]g^p]s^obdZyc=_e^&boa.\b]jbb`s`o^d\yb=`ra9`b^`a_\b``\c][[d`E[nb&]nal]abd_e^ybbbJ^p[a^s_o\r[h`O\e\a_&bbcjab\m]r]s\mcccsao[dc.bb^j]b]m]f[&_1a6`4_4[5^8^0b=ci5">Deadline Tomorrow</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?`N^=]v\ebi_t_a\=]p\Tao]?csc.`baJaeZt_=^gap]sao^d\ya=\e_&aoa.[bcj`bbs_o`dbyc=\r`9Zb_`a_`b``]c_[^d_E]n^&am`tarapbe[y]b\Jbpaa[sbo\r`h[Oceca_&_b[jcbZmcrasZm`c`s]o^d^.ab^j[b`m\f`&[1c6a4\4\5^8^0a=_i3">Part Time</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?_N\=[v`t\a\t_ob=cpaT\o]?]s\.cbcJae[tc=bg^p]s]o]d[y_=ae`&_o[.^b^jbbcs_o]d_y[=br_9]b^`__^b``\c\[cdbEbn]&bcarZn`c\e_y_b[J_pbaZsbo^r\hcObe]ac&bb\j_b`m]rcscm`ccs`o`d^.bb`jbb[m^fa&`1b6\4^4_5[8a0^=[i5">Contractual</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?Na=[vbt\e`n[ecoc=_p_T[oc?Zsc.abZJ`e`t]=^g^pas^o[d`y\=`e[&coa.\b\j^b^sao_d]y_=`r\9_bb`c_]ba`\c^[]d_E\n\&an^m]r[v^g]e^y]b^JbpZacs_o^rbhaO\e]ab&`b`j^b\mbr`sam`c^sao\d`.\b]j[b`m[fb&]1a6]4b4_5^8b0b=^i[4">Government</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?N\=_v`p]acsco`eci`n`i^abo`=bg[p^sao`dby\=^e_&[oa.^b[j_b`s^o]d\yb=_r_9\b]`\_ab]`ccc[`daEanZ&_s^.ab]jas^w\oat\c_laeaa[&cb`jbb_m`rbscm\c`sZo_da.`b`j]b_m^f_&]1^6a4`4a5a8b0[=]i\8">Location Wise</a></li>
                                    <li><a target="mine" href="https://joblist.bdjobs.com/jobs_filter.asp?E[nZ&_a`s[ecoceby_b\jcpbacsao[e`icn_iaa^oc=^g[p`s\o`d[yc=ae\&\oa.^bbjbb`s_ocd_y_=br[9]b\`__ab]`\cc[cdaN[=cvbs^e]r]v]=[p_tao`?_s[.^b^jbscw_o]t_c[lbe_a]&^b_j^b`m\r\scmbcbs]obda.Zb`j\b_m_f[&_1b6Z4b4^5\8c0b=]ic8">Overseas</a></li>
                                  </ul>
                                </li>
                                <li><a href="https://joblist.bdjobs.com/jobs_filter.asp?cN_=cv`pca^tbi`_bn[p_oa=`g[p_sao_d[y_=^e[&_oc.^b]j\bbsbo_d\y]=\r]9]bc`c_`ba`bcZ[ad^Ecn]&[s^.\s^l_y_aamaC[eca`&bbcj`bbm[r\s`mZc`saoadc._b`j^bam`f_&a1`6a4a4b5\8^0\=bi7">Companies Jobs</a></li>
                                <li><a href="logout.asp?url=http://www.bdjobs.com/career/counsel.asp">Career Counselling</a></li>
                                <li style="border:none"><a href="logout.asp?url=http://mybdjobs.bdjobs.com/mybdjobs/faq.asp">FAQ</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                        </div>
                     </div>
</div>


<!--<div class="row">
  <div class="container">
	 <div class="col-md-12">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<p class="welcome alert alert-sucess " role="alert">
		   Welcome to My Bdjobs, your Personalized Career Management Account. This account offers you Editing, Deleting, and Updating of your existing bdjobs.com account and provides you all the benefits i.e., RESUME, JOB AGENT, JOB CART etc. Similarly, this offers you the opportunity of sending copies of your Resume to the prospective employers, or find the companies that viewed your Resume.
		</p>
	 </div>
  </div>
</div>-->


<div class="leftsidebar">
<div class="container">
<div class="col-md-3 sidebar">
  <div class="row">
    
   <div class="mini-submenu">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
   </div>
   <div class="list-group">
      
      <span href="#" class="list-group-item active list-header">
      <i class="glyphicon glyphicon-briefcase icon-padding"> </i> My Bdjobs
      </span>
      <a href="welcome.asp" class='list-group-item list'  >
      <i class="glyphicon glyphicon-home icon-padding"></i> Home
      </a>
      <a href="masterview.asp " class='list-group-item list'>
      <i class="glyphicon glyphicon-eye-open icon-padding"></i> View Resume
      </a>
     
      <a href="step_01_view.asp" class='list-group-item list btn-active'>
      <i class="glyphicon glyphicon-edit icon-padding"></i> Edit Resume
      </a>
       <a href="file_upload.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-open"></i> Upload Resume <span style="font-size: 13px;font-weight: normal;" class="label label-warning label-as-badge pull-right">New</span>
      </a>
      
      <a href="block_emp.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-ban-circle icon-padding"></i> Block Employer 
      </a>
      <a href="edit_agent.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-bullhorn icon-padding"></i> Job Agent 
      </a>
      <a href="view_stats.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-stats icon-padding"></i> My Stats
      </a>
          
       <a href="mail_form.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-envelope icon-padding"></i> Email Resume
      </a>
     
      
      <a href="del_resume.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-trash icon-padding"></i> Delete Resume
      </a>
      <a href="edit_account.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-lock icon-padding"></i> Change Password
      </a>
      <a href="email_notify.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-bell icon-padding"></i> Email Notification
      </a>
      
      <a href="training.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-book icon-padding"></i> Trainings
      </a>
      
      <a href="logout.asp" class='list-group-item list'>
      <i class="glyphicon glyphicon-off icon-padding"></i> Sign Out
      </a>
   </div>
   </div>
</div>

<div class="col-md-9 col-sm-12">
  <div class="row">
  <div class="panel">
    <div class="panel-heading panel-heading-01"><i class="glyphicon glyphicon-edit icon-padding"></i>Edit Resume</div>
    <!--<div class="panel-body panel-body-02">
    </div>--> 
    <br />
    <div class="panel-body-02" style="padding-top:0px;">
      <FORM action="{{ URL::route('jobseeker-link-submit-post') }}" method="post" name="formPS_View" id="formPS_View">
        <input name="hPS" type="hidden" id="hPS" value="false"/>
        
        <ul class="nav nav-tabs" role="tablist">
          <li ><a href="javascript:PassUserID('Personal');" >Personal</a></li>
          <li class="active"><a href="#Education" >Education/Training</a></li>
          <li><a href="javascript:PassUserID('Employment');">Employment</a></li>
          <li><a href="javascript:PassUserID('Others');" >Others</a></li>
          <li><a href="javascript:PassUserID('Photograph');">Photograph</a></li>
        </ul>
      </FORM>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="profile">
          <div class="tab-header"> Academic Qualification </div>
          <div id="message" class="col-md-12 col-sm- 12 col-xs-12" style="display:none;"></div>
          <!-- START DATA FOR EDUCATIONAL/TRAINING AREAS-->
          
          <!--- START AC. QUALIFICATION-->
          <div class="row tab-data" style="border-bottom: none;">
            <div class="container-fluid tab-container">
              <div class="col-md-12 col-sm- 12 col-xs-12" id='message_1'>
                <p style="margin-top: 10px;" >Currently no data exist! Please click on the following button to add your academic information.</p>
              </div>
              <div class="col-md-12 col-sm- 12 col-xs-12">
                
                <div id="1"></div>
                
                <div id="2"></div>
                
                <div id="3"></div>
                
                <div id="4"></div>
                
                <div id="5"></div>
                
                <div id="6"></div>
                
                <div id="7"></div>
                
                <div id="8"></div>
                
                <div id="9"></div>
                
                <div id="10"></div>
                
                <input type="hidden" id="intcount" name="intcount" value="0" />
                <a class="fancybox" id="fancybox" href="#Wrapperbox">
                <button type="submit" class="btn view-btn create-btn" onClick="openbox(0,'-1','-1','-1');"> <i class="glyphicon glyphicon-plus-sign icon-padding"></i>Add Education </button>
                </a> </div>
            </div>
          </div>
          <!--- END AC. QUALIFICATION-->
          
          <!-- 	END DATA FOR EDUCATIONAL/TRAINING --> 
          <!-- START TRAINING AREA -->
          <div class="tab-header"> Training Summary </div>
          <div id="tr_message" style="display:none;"></div>
          
          <!-- START HEADER SECTION AREA -->
          
          
          <div class="row tab-data" style="border-bottom: none;">
            <div class="container-fluid tab-container">
              <div class="col-md-12 col-sm- 12 col-xs-12">
                <p style="margin-top: 10px;" id="tr_message_1">Currently no data exist! Please click on the following button to add your academic information.</p>
              </div>
              <div class="col-md-12 col-sm- 12 col-xs-12">
                
                <div id="tr1"></div>
                
                <div id="tr2"></div>
                
                <div id="tr3"></div>
                
                <div id="tr4"></div>
                
                <div id="tr5"></div>
                
                <div id="tr6"></div>
                
                <div id="tr7"></div>
                
                <div id="tr8"></div>
                
                <div id="tr9"></div>
                
                <div id="tr10"></div>
                
                <div id="tr11"></div>
                
                <div id="tr12"></div>
                
                           <INPUT name="hTrainingCounter" type="hidden" id="hTrainingCounter" value="0">

                <a style="text-decoration:none;"  class="fancybox" id="fancybox" href="#Wrapperbox">
                <button type="submit" class="btn view-btn create-btn" onClick="openbox(0,'-2','-2','-1');"><i class="glyphicon glyphicon-plus-sign icon-padding"></i>Add Training</button>
                </a> </div>
            </div>
          </div>
          
          
          <!-- END TRAINING AREA --> 
          
          <!-- START Professional AREA -->
          <div class="tab-header"> Professional Summary </div>
          <div id="proq_message" style="display:none;"></div>
          <!-- START HEADER SECTION AREA -->
          
          
          <div class="row tab-data" style="border-bottom: none;">
            <div class="container-fluid tab-container">
              <div class="col-md-12 col-sm- 12 col-xs-12">
                <p style="margin-top: 10px;" id='proq_message_1'>Currently no data exist! Please click on the following button to add your academic information.</p>
              </div>
              <div class="col-md-12 col-sm- 12 col-xs-12">
                
                <div id="proq1"></div>
                
                <div id="proq2"></div>
                
                <div id="proq3"></div>
                
                <div id="proq4"></div>
                
                <div id="proq5"></div>
                
                <div id="proq6"></div>
                
                <div id="proq7"></div>
                
                <div id="proq8"></div>
                
                <div id="proq9"></div>
                
                <div id="proq10"></div>
                
                <div id="proq11"></div>
                
                <div id="proq12"></div>
                
                            	<INPUT id="hPECounter" type="hidden" value="0" name="hPECounter"><tr>

                <a style="text-decoration:none;"  class="fancybox" id="fancybox" href="#Wrapperbox">
                <button type="submit" class="btn view-btn create-btn" onClick="openbox(0,'-3','-3','-1')"><i class="glyphicon glyphicon-plus-sign icon-padding"></i>Add Professional Qualification</button>
                </a> </div>
            </div>
          </div>
          
          
          <!-- END Professional AREA --> 
          
          <!-- 	END DATA FOR EDUCATIONAL/TRAINING --> 
        </div>
        <!-- end tab pan area --> 
      </div>
      <!-- TAB ITEMS END HERE--> 
    </div>
    <!-- end of panel body --> 
    
  </div>
  </div>
  
  <!-- end of panel --> 
</div>
<!-- end of col-sm-12 --> 
<!-- END BODY TABLE CONTENT--> 
<!--- START ADSEND ADVERTISEMENT AREA-->

<!--- END ADSEND ADVERTISEMENT AREA-->
</div>
</div>
<!--- STAT FOOTER ADVERTISMENT-->
</div>
<div class="footer-ad">
                  <div class="container">
                  		<div class="row">
                             <div class="col-md-offset-3">
                                 
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
               </div>
                <!-- START FOOTER AD MOBILE-->
               <div class="footer-ad">
                  <div class="container">
                  		<div class="row">
                             <div class="col-md-offset-3 footer-ad-mobile">
						
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
               </div>
<!-- END FOOTER AD MOBILE-->

<script type="text/javascript">	
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
<div class="footer" >
  <div class="container footer-padding">
     <div class="col-md-3 footer-01">
        <h3>About Us</h3>
       <a href="http://www.bdjobs.com/about.asp" target="mine"> <p>About Bdjobs.com</p></a>
       <a href="http://www.bdjobs.com/tos.asp" target="mine"><p>Terms & Conditions</p></a>
       <a href="#" class="showintp"> <p>International Partners</p></a>
       
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
       <a href="http://www.bdjobs.com/contact.htm" target="mine"><p>Contact Us</p></a>
     </div>
     <div class="col-md-3 footer-01">
        <h3>Job Seekers</h3>
        <a href="http://www.mybdjobs.bdjobs.com/resumes/step_01.asp"><p>Post Resume</p></a>
        <a href="http://www.bdjobs.com/career/counsel.asp"><p>Career Counseling</p></a>
        <a href="http://www.mybdjobs.bdjobs.com/"><p>My Bdjobs</p></a>
        <a href="http://mybdjobs.bdjobs.com/mybdjobs/faq.asp" ><p>FAQ</p></a>
     </div>
     <div class="col-md-3 footer-01">
        <h3>Employers</h3>
        <a href="http://corporate2.bdjobs.com/Corporate_NewAccount.asp" target="mine"><p>Create Account</p></a>
        <a href="http://corporate2.bdjobs.com/services.asp" target="mine"><p>Products/Service</p></a>
        <a href="http://corporate2.bdjobs.com/" target="mine"><p>Post a Job</p></a>
        <a href="http://corporate2.bdjobs.com/faq.asp" target="mine"><p>FAQ</p></a>
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
			   
			   
<div id="Wrapperbox" style="display:none;">
  <iframe id="Iframe" name="Iframe"   frameborder="0" width="674px"  ></iframe>
</div>
</body>
</html>
