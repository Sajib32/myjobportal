<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Jobs - Careers</title>

  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/flexslider.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/responsive.css') }}

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
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
                <li><a href="{{ URL::route('job-listing') }}">Jobs Listings</a></li>
              </ul>
            </li>
            <li>
              <a href="candidates.html">Candidates</a>
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

    <div class="header-page-title">
      <div class="container">
        <h1>Available Jobs <small>(350)</small></h1>

        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Jobs</a></li>
        </ul>
      </div>
    </div>
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 page-sidebar">
          <aside>
            <div class="white-container mb0">
             

              <div class="widget sidebar-widget jobs-filter-widget">
                

                <div class="widget-content">
         
                  <h6>By Industry</h6>

                  <div>
                    <ul class="filter-list">
                      <li><a href="#">Administration <span>(75)</span></a></li>
                      <li><a href="#">Manufactoring <span>(3741)</span></a></li>
                      <li><a href="#">Healthcare &amp; Science <span>(115)</span></a></li>
                      <li><a href="#">Media &amp; Creative <span>(347)</span></a></li>
                      <li><a href="#">Transportation <span>(52)</span></a></li>
                    </ul>

                    <a href="#" class="toggle"></a>
                  </div>

                  <h6>By Type</h6>

                  <div>
                    <ul class="filter-list">
                      <li><a href="#">Banking/Finance <span>(300)</span></a></li>
                      <li><a href="#">Administration <span>(758)</span></a></li>
                      <li><a href="#">Art/Design/Creative <span>(20)</span></a></li>
                      <li><a href="#">Customer Service <span>(165)</span></a></li>
                      <li><a href="#">Education/Training <span>(11)</span></a></li>
                      <li><a href="#">Banking/Finance <span>(9)</span></a></li>
                    </ul>

                    <a href="#" class="toggle"></a>
                  </div>

            

                  <input type="submit" class="btn btn-default mt30" value="Filter">
                </div>
              </div>
            </div>
          </aside>
        </div> <!-- end .page-sidebar -->

        <div class="col-sm-8 page-content">
          

          <div class="title-lines">
            <h3 class="mt0">Available Jobs</h3>
          </div>

          <div class="clearfix mb30">

            <ul class="pagination pull-right">
              <li><a href="#" class="fa fa-angle-left"></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#" class="fa fa-angle-right"></a></li>
            </ul>
          </div>
@foreach($catjobs as $cat)
          <div class="jobs-item with-thumb">
            <div class="clearfix visible-xs"></div>
            <h6 class="title"><a href="{{URL::route('view', $cat->id)}}">{{ $cat->job_title }}</h6>
            <span class="meta">{{ $cat->employer->empcompany->company_name }}</span><br >
            <span class="meta">Deadline: {{ $cat->applying_last_date }}</span>
            <p class="description"><a href="{{ URL::route('view', array($cat->id)) }}">Read Details</a></p>

            <ul class="top-btns">
              <li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-star"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-link"></a></li>
            </ul>

          </div>

   @endforeach       

      


          <div class="clearfix">
            <ul class="pagination pull-right">
              <li><a href="#" class="fa fa-angle-left"></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#" class="fa fa-angle-right"></a></li>
            </ul>
          </div>
        </div> <!-- end .page-content -->
      </div>
    </div> <!-- end .container -->
  </div> <!-- end #page-content -->

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

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>

{{ HTML::script('assets/js/jquery.ba-outside-events.min.js') }}
{{ HTML::script('assets/js/jquery.responsive-tabs.js') }}
{{ HTML::script('assets/js/jquery.flexslider-min.js') }}
{{ HTML::script('assets/js/jquery-ui-1.10.4.custom.min.js') }}
{{ HTML::script('assets/js/script.js') }}

</body>
</html>

