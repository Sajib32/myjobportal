
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
				<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
</head>


               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
          >
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
               <!--[if IE]>
               <script src="js/html5shiv.js"></script>
               <script src="js/respond.js"></script>
               <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
               <![endif]-->

           
               
               
               <!--- END OF NOTIFICATION BAR-->

               <!---START LOGO AREA-->
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

               <!--- STAT FOOTER ADVERTISMENT-->
               <div class="row footer-ad">
                  <div class="container">
                     <div class="col-md-12">
                     
                     </div>
                  </div>
               </div>
               <!--- END FOOTER ADVERTISMENT-->

               <!--- END FOOTER AREA-->
               <div class="scroll-top-wrapper ">
                  <span class="scroll-top-inner">
                  <i class="glyphicon glyphicon-circle-arrow-up"></i>
                  </span>
               </div>

               <!-- JQUERY OFFICIAL CDN -->
               <script src="{{ URL::asset('js/jquery-2.0.2.js') }}"></script>
               <!-- BOOSTRAP JQUERY SCRIPT -->
               <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
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