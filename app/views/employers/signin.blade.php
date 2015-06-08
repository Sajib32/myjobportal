<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Corporate Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="{{ URL::asset('css/employers/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fonts/digital_font/webfont.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/employers/CropStyle1.css') }}">
    
    <!-- jQuery -->

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <!--<script src="js/jquery.min-1.10.2.js"></script>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min-3.7.0.js"></script>
      <script src="js/respond.min-1.3.0.js"></script>
    <![endif]-->
   
  </head>


  <body class="cbp-spmenu-push">
   


<section id="header">
  <div class="container">
  </div>
</section> <!-- Header section ends -->

   <!-- Main Content section starts -->
    <section id="main-content">
      <div class="container">
        
        <div class="home-content">
          
          <div class="home-content-stats">


          </div> <!-- "home-content-stats" ends -->

          

          <div class="home-intro clearfix">
            <h3>How Online Job Portal helps employers in <span></span></h3>
            
            <div class="home-intro-tabs">
               <ul class="" id="howtoTab">
                <li>Saves up to 80% in Recruitment overhead cost.
</li>
                <li>Makes recruitment management faster and easier.</li>
                <li>Saves up to 70% time in recruitment functions.</li>
                <li>Cuts advertisement cost up to 80%.</li>
              </ul>


              </div>

            </div> <!-- "home-intro" ends -->

            <div class="home-quick-link clearfix">
              <a href="javascript:OpenForm();" class="btn btn-success" >Create New Account</a>
              <a href="services.asp" class="btn btn-default">View Offering Details</a>
            </div>

        </div>

        <div class="home-sidebar">

          <div class="home-sidebar-login">

            <h3>Corporate Login</h3>

            <form role="form" autocomplete="off" id="frmDefault" method="post" action="{{ URL::route('employer-sign-in-post') }}">
            <div>
                
            </div>
              
              <div class="form-group">
                <input type="text" name="email" id="NAME" size="20" maxlength="40" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="Password" name="password" id="PASS" size="20" maxlength="8" class="form-control" placeholder="Password" onfocus="synchronise()">
                
                
              </div>
              <div class="form-group" id="remember" onclick="rememberId()" style="cursor:pointer">
              <input type="checkbox" name="chkRem" id="chkRem" onclick="rememberId()" /> <span style="font-size:16px">Remember me</span>
              </div>
              <button type="submit" class="btn btn-default" >Login</button>
              {{ Form::token() }}
            </form>

            <a href="{{ URL::route('EmpAccount') }}" class="btn btn-success" onClick="OpenForm();">New Account</a>

            <a href="{{ URL::route('employer-forgot-password') }}">Forgot Username or Password?</a>

          </div>
          <br />
          <br />
          <div class="home-sidebar-news">
             <h3>News &amp; Events</h3>
            
            <table width="100%" border="0" cellpadding="5" cellspacing="0">
              <tr valign="top">
                <td>
                    <a href="http://www.entrepreneur.com/article/232851"><img src="images/The-3-Attributes.jpg" /></a>
                </td>
                <td>
                    <h4><a href="http://www.entrepreneur.com/article/232851" target="_blank">Entrepreneur</a></h4>
                    <p>The 3 Attributes to Look for in Top Talent</p>
                </td>
              </tr>
              <tr valign="top">
                <td>
                  <a href="https://www.linkedin.com/today/post/article/20140501140005-68335342-7-management-traits-that-will-make-all-your-employees-stay?trk=tod-home-art-list-large_0"><img src="images/7-Management-Traits.jpg" /></a>
                </td>
                <td>
                <h4><a href="https://www.linkedin.com/today/post/article/20140501140005-68335342-7-management-traits-that-will-make-all-your-employees-stay?trk=tod-home-art-list-large_0" target="_blank">7 Management Traits</a></h4>
                <p>7 Management Traits That Will Help Retain Talented Employees</p></td>
              </tr>
              
              <tr valign="top">
                <td>
                    <a href="http://exectimes.com/content/may13/CSR.asp"><img src="images/Employer-Branding.jpg" /></a>
                </td>
                <td>
                    <h4><a href="http://www.employerbrandingtoday.com/blog/2013/06/25/employers-come-to-campus/" target="_blank">Employer Branding</a></h4>
                    <p>Employers – Come to Campus!</p>
                </td>
              </tr>
              <tr valign="top">
                <td>
                    <a href="http://exectimes.com/content/may13/CSR.asp"><img src="images/The-Quest-for-Purpose.jpg" /></a>
                </td>
                <td>
                    <h4><a href="http://www.employerbrandingtoday.com/" target="_blank">The Quest for Purpose</a></h4>
                    <p>Why should I work here?</p>
                </td>
              </tr>
            </table>
          </div>

        </div>
      </div>
    </section> <!-- Main Content section ends -->
    

  <link rel="stylesheet" href="{{ URL::asset('css/employers/colorbox.css') }}">
  


  <!-- Bootstrap JS -->
  <script src="{{ URL::asset('js/employers/bootstrap.min-3.0.3.js') }}"></script>

  </body>
</html>