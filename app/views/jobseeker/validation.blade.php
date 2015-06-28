
<!DOCTYPE html>
         <html class="no-js">
            <!--<![endif]-->
            <head>

            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
               <meta charset="utf-8">
               <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
               <title>Verification Succesful</title>
				<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>


               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {{ HTML::style('assets/css/bootstrapemp.css') }}
    {{ HTML::style('assets/css/formValidationemp.css') }}

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    {{ HTML::script('assets/js/jquery.minemp.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/formValidation.js') }}
    {{ HTML::script('assets/js/bootstrap.js') }}
          <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/flexslider.css') }}
    {{ HTML::style('assets/css/style.css') }}
               <!-- Bootstrap CSS -->
               <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
               <!-- Google Fonts -->
               <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
               <!-- Main Styleshet -->
               <link rel="stylesheet" href="{{ URL::asset('css/style-resume.css') }}">
               <!-- Responsive StyleSheet -->
               <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
               <!-- Condition script for ie for responsive and html5 -->
            </head>
            <body>
              <div id="main-wrapper"> 
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
        <a href="#" class="btn btn-link bookmarks">Bookmarks</a>

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
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="active has-submenu">
              <a href="jobs.html">Jobs</a>
              <ul>
                <li><a href="jobs.html">Jobs Listings</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="about-us.html">About Us</a>
              <ul>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div> <!-- end .container -->

      <div id="mobile-menu-container" class="container">
        <div class="login-register"></div>
        <div class="menu"></div>
      </div>
    </div> <!-- end .header-nav-bar -->

    <div class="header-page-title">
      <div class="container">
        <h1>Verification Successful</h1>

        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Jobs</a></li>
        </ul>
      </div>
    </div>
  </header> <!-- end #header -->
        <div class='notifications top-left'></div>
            <div class="row">
                <div class="container">
                    <div class="col-sm-12 col-md-12">
                  
                    </div>
                </div>
            </div>
               <!--- END OF LOGO AREA-->
            

               <!-- END MENU NEV AREA-->
               <!-- START LEFT SIDE BAR-->
                   <form action="{{ URL::route('jobseeker-sign-in') }}">  

               <div class="row leftsidebar">
                  <div class="container">
                  	


                     <!-- START BODY TABLE CONTENT-->
                     <div class="col-md-12">
                        <div class="panel">
                           <div class="panel-body panel-body-02 message-details" style="padding-bottom: 0px;">
                           <h4 style="font-size: 18px; font-weight: bold;  color: #69aa44;">
                            <i class='glyphicon glyphicon-ok-sign' style=''></i>Verification successful!
                           </h4>
                              <ul style="margin-bottom: 30px; width: 100%;">
                                <li style="line-height: 20px;">
								Your  account has been activated. You can now login to your account.                                
                                </li>
                              </ul>
                              <br>
                               
                              <h4 style="font-size: 16px; font-weight: 800;">You can get email notification for different services by selecting any or all of the following options.</h4>

                
                           </div>
                                                   
                           <table class="table table-inside" style="width: 85%; border-top: none;">
                              <tbody>
                              
                              
				<tr>
				<td style='padding: 10px 0px 15px 0px;'>
                <span class="icon">
				<input type="checkbox"  class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 12px;margin-left:15px;" name="chkService" id="chkService" value="1" checked>
                </span>
				 <h4 class="email-notification-h4">Hot Job Notification</h4>
				 <p style="margin:10px 0px 0px 40px; font-size:14px;">Get regular e-mail job notification of all the hot jobs that match your qualification</p>
				 
				</td>
				</tr>
			
				<tr>
				<td style='padding: 10px 0px 15px 0px;'>
                <span class="icon">
				<input type="checkbox"  class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 12px;margin-left:15px;" name="chkService" id="chkService" value="2" checked>
                </span>
				 <h4 class="email-notification-h4">Workshop/ Training Notification</h4>
				 <p style="margin:10px 0px 0px 40px; font-size:14px;">Stay in touch with latest and updated Professional Development Workshops. This premium service will enable you to receive regular mail on workshops. Know about best practices in the industry and benchmark your performance</p>
				 
				</td>
				</tr>
			
				<tr>
				<td style='padding: 10px 0px 15px 0px;'>
                <span class="icon">
				<input type="checkbox"  class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 12px;margin-left:15px;" name="chkService" id="chkService" value="3" checked>
                </span>
				 <h4 class="email-notification-h4">Third-party Offers and Promotions</h4>
				 <p style="margin:10px 0px 0px 40px; font-size:14px;">Offers and promotions (via email) from different organisations designed especially for members</p>
				 
				</td>
				</tr>
			
				<tr>
				<td style='padding: 10px 0px 15px 0px;'>
                <span class="icon">
				<input type="checkbox"  class="email-notification-checkbox" style="float:left; margin-right:5px; margin-top: 12px;margin-left:15px;" name="chkService" id="chkService" value="4" checked>
                </span>
				 <h4 class="email-notification-h4">jobs Newsletter</h4>
				 <p style="margin:10px 0px 0px 40px; font-size:14px;"></p>
				 
				</td>
				</tr>
			
                              
                              
                           </tbody>
                           </table>

                           <div style="text-align: center; margin-bottom: 25px;">
                                <button type='submit' class='btn view-btn log-in'> <i class='glyphicon glyphicon-circle-arrow-right'></i> Go </button> 
                                {{ Form::token() }}
                              </div>
                        </div>
                     </div>
                     <!-- END BODY TABLE CONTENT-->
                  </div>
               </div>
               </form>
               <!-- END LEFT SIDE BAR-->


  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-4">
          <div class="widget">
            <div class="widget-content">
               {{ HTML::image('/assets/images/header-logo.png', '', array('width'=>'205px','height'=>'50px')) }}
              <p></p>
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
  </footer> <!-- end #footer -->
  </div>
               <!-- JQUERY OFFICIAL CDN -->
               <script src="{{ URL::asset('js/jquery-2.0.2.js') }}"></script>
               <!-- BOOSTRAP JQUERY SCRIPT -->
               <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
               {{ HTML::script('assets/js/script.js') }}
               <!--- CUSTOM JQUERY SCRIPTS -->
               <script type="text/javascript">

                  $(function () {
                      $("[rel='tooltip']").tooltip();
                  });
               </script>
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