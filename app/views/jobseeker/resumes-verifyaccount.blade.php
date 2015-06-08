
<!DOCTYPE html>
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
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title></title>
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
<!-- Condition script for ie for responsive and html5 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>



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
<!--[if IE]>
               <script src="js/html5shiv.js"></script>
               <script src="js/respond.js"></script>
               <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
               <![endif]--> 

<!--- START NOTIFICATION BAR-->
<div class="wrapper_top">
  <div class="container">
  
  </div>
</div>
<div class='notifications top-left'></div>
</div>
<!--- END OF NOTIFICATION BAR-->
<div class="row">
  <div class="container">
    <div class="col-sm-12 col-md-12"> <a href="">
      
      </a> </div>
  </div>
</div>

<!--- END OF NOTIFICATION BAR--> 

<!---START LOGO AREA--> 

<!--- END OF LOGO AREA--> 
<!--- START MENU NEV AREA-->

<!--- START MENU NEV AREA-->
<div class="row">
  <div class="container">
    <div class="col-md-12"> </div>
  </div>
</div>

<!-- END MENU NEV AREA--> 
<!-- START LEFT SIDE BAR-->
<div class="row leftsidebar">
  <div class="container"> 
    
    <!-- START BODY TABLE CONTENT-->
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-body panel-body-02 message-details">
          <h4 style="font-size: 18px; font-weight: bold;  color: #69aa44;"> <i class="glyphicon glyphicon-ok-sign" style=""></i> Signup successful! </h4>
          <ul style="margin-bottom: 30px;">
            <h4 style="font-weight: bold;"> Email address verification needed. </h4>
            <li style="line-height: 20px;"> Welcome to Online Job Portal <br>
              Before you can login, please check your email to activate your user account. If you don't receive an email within a few seconds, please check your spam filter. You've to activate your account within 72 hours. If you have multiple accounts, you will need to go through the verification process on each account. </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END BODY TABLE CONTENT--> 
  </div>
</div>
<!-- END LEFT SIDE BAR--> 

<!--- STAT FOOTER ADVERTISMENT-->
<div class="row">
  <div class="container">
    <div class="col-md-12 footer-ad">
      

    </div>
  </div>
</div>
<!--- END FOOTER ADVERTISMENT--> 
<!-- START FOOTER AD MOBILE-->
<div class="row">
  <div class="container">
    <div class="col-md-12 footer-ad-mobile">
      

<script type="text/javascript">
    
    </script>

    </div>
  </div>
</div>

<!--- END FOOTER ADVERTISMENT--> 

<!--- END FOOTER AREA-->
<div class="scroll-top-wrapper "> <span class="scroll-top-inner"> <i class="glyphicon glyphicon-circle-arrow-up"></i> </span> </div>

<!-- JQUERY OFFICIAL CDN --> 
<script src="{{ URL::asset('js/jquery-2.0.2.js') }}"></script>
<!-- BOOSTRAP JQUERY SCRIPT --> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!--- CUSTOM JQUERY SCRIPTS --> 

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
</body>
</html>