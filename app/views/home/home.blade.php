
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Homepage - Careers</title>

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
            <li class="active">
              <a href="index.html">Home</a>
            </li>
            <li class="has-submenu">
              <a href="jobs.html">Jobs</a>
              <ul>
                <li><a href="{{ URL::route('job-listing') }}">Jobs Listings</a></li>              
              </ul>
            </li>
            <li>
              <a href="{{ URL::route('candidate') }}">Candidates</a>
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

    <div class="header-search-bar">
      <div class="container">

        {{ Form::open(array('url'=>'/search/jobs', 'method'=>'get')) }}
          <div class="basic-form clearfix">
           
            <div class="hsb-input-1">
              <input type="text" name="keyword" class="form-control" placeholder="I'm looking for a ...">
            </div>
            <div class="hsb-container">
             <div class="hsb-submit">
              <input type="submit" class="btn btn-default btn-block" value="Search">
            </div>
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div> <!-- end .header-search-bar -->

    <div class="header-banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="header-banner-box register">
              <div class="counter-container">
                <ul class="counter clearfix">
                  <li class="zero">0</li>
                  <li>3</li>
                  <li>5</li>
                  <li>1</li>
                  <li>0</li>
                  <li>9</li>
                </ul>

                <div><span>Jobs</span></div>
              </div>

              <a href="{{ URL::route('jobseeker-resume') }}" class="btn btn-default">Register Now</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="header-banner-box post-job">
              {{ HTML::image('/assets/images/badge.png', '', array('width'=>'105px','height'=>'50px')) }}

              <a href="{{ URL::route('EmpAccount') }}" class="btn btn-red">Post a Job</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end .header-banner -->
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 page-content">
          <div class="title-lines">
            <h3 class="mt0">Find a Job Per</h3>
          </div>

          <div class="find-job-tabs responsive-tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#find-job-tabs-industry">Industry</a></li>
              <li><a href="#find-job-tabs-role">Type</a></li>
            </ul>

            <div class="tab-content">
       

              <div class="tab-pane active" id="find-job-tabs-industry">
                <div class="row p30">
                  <div class="col-sm-6">
                    <h6 class="mt0">Administrative and Support Services</h6>

                    <ul class="filter-list">
                       @foreach($categories as $cat)
                           <li><a href="{{ action('HomeController@getCategoriesJobs', $cat->id) }}">{{ $cat->name }}</a></li>
                       @endforeach
                    </ul>

                    <h6>Healthcare and Science</h6>

                    <ul class="filter-list">
                      <li><a href="#">Pharmaceutical <span>(42)</span></a></li>
                      <li><a href="#">Manufacturing <span>(149)</span></a></li>
                      <li><a href="#">Mechanical <span>(28)</span></a></li>
                      <li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
                      <li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
                      <li><a href="#">Textiles <span>(10)</span></a></li>
                      <li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
                    </ul>
                  </div>

                  <div class="col-sm-6">
                    <h6 class="mt0">Manufacturing and Industrial</h6>

                    <ul class="filter-list">
                      <li><a href="#">Agriculture/Forestry/Fishing <span>(42)</span></a></li>
                      <li><a href="#">Installation/Maintenance <span>(37)</span></a></li>
                      <li><a href="#">Manufacturing and Production <span>(96)</span></a></li>
                      <li><a href="#">Mining <span>(9)</span></a></li>
                      <li><a href="#">Safety/Environment <span>(21)</span></a></li>
                      <li><a href="#">Industrial <span>(184)</span></a></li>
                      <li><a href="#">Manufacturing <span>(149)</span></a></li>
                      <li><a href="#">Mechanical <span>(28)</span></a></li>
                      <li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
                      <li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
                      <li><a href="#">Textiles <span>(10)</span></a></li>
                      <li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
                    </ul>

                    <h6>Healthcare and Science</h6>

                    <ul class="filter-list">
                      <li><a href="#">Pharmaceutical <span>(42)</span></a></li>
                      <li><a href="#">Manufacturing <span>(149)</span></a></li>
                      <li><a href="#">Mechanical <span>(28)</span></a></li>
                      <li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
                      <li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
                      <li><a href="#">Textiles <span>(10)</span></a></li>
                      <li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="find-job-tabs-role">
                <div class="p30">
                  

                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="filter-list">
                        <li><a href="#">Accounting/Banking/Finance Jobs <span>(581)</span></a></li>
                        <li><a href="#">Administration Jobs <span>(406)</span></a></li>
                        <li><a href="#">Art/Design/Creative Jobs <span>(176)</span></a></li>
                        <li><a href="#">Customer Service Jobs <span>(334)</span></a></li>
                        <li><a href="#">Education/Training Jobs <span>(180)</span></a></li>
                        <li><a href="#">Engineering Jobs <span>(978)</span></a></li>
                        <li><a href="#">Healthcare/Medical Jobs <span>(131)</span></a></li>
                        <li><a href="#">Human Resources/Personnel Jobs <span>(318)</span></a></li>
                        <li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
                        <li><a href="#">Logistics Jobs <span>(144)</span></a></li>
                        <li><a href="#">Management Jobs <span>(743)</span></a></li>
                        <li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
                        <li><a href="#">Logistics Jobs <span>(144)</span></a></li>
                        <li><a href="#">Management Jobs <span>(743)</span></a></li>
                      </ul>
                    </div>

                    <div class="col-sm-6">
                      <ul class="filter-list">
                        <li><a href="#">Marketing/PR Jobs <span>(329)</span></a></li>
                        <li><a href="#">Other Jobs <span>(326)</span></a></li>
                        <li><a href="#">Purchasing/Procurement Jobs <span>(130)</span></a></li>
                        <li><a href="#">Quality Control Jobs <span>(93)</span></a></li>
                        <li><a href="#">Research Jobs <span>(33)</span></a></li>
                        <li><a href="#">Safety Jobs <span>(72)</span></a></li>
                        <li><a href="#">Sales Jobs <span>(1061)</span></a></li>
                        <li><a href="#">Secretarial Jobs <span>(155)</span></a></li>
                        <li><a href="#">Support Services Jobs <span>(744)</span></a></li>
                        <li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
                        <li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
                        <li><a href="#">Support Services Jobs <span>(744)</span></a></li>
                        <li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
                        <li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            
            </div>
          </div> <!-- end .find-job-tabs -->

          <div class="title-lines">
            <h3>Latest Jobs</h3>
          </div>

          <div class="latest-jobs-section white-container">
            <div class="flexslider clearfix">
              <ul class="slides">
                <li>
                  <div class="content">
                    <h6>Jr. Software Engineer</h6>
                    <span class="location">WeDEVs, Dhaka</span><br >
                    <p><a href="http://localhost:8000/job_details/2" class="read-more">Read More</a></p>
                  </div>
                </li>
               <li>
                  <div class="content">
                    <h6>Jr. Software Engineer</h6>
                    <span class="location">WeDEVs, Dhaka</span><br >
                    <p><a href="http://localhost:8000/job_details/2" class="read-more">Read More</a></p>
                  </div>
                </li>
               <li>
                  <div class="content">
                    <h6>Jr. Software Engineer</h6>
                    <span class="location">WeDEVs, Dhaka</span><br >
                    <p><a href="http://localhost:8000/job_details/2" class="read-more">Read More</a></p>
                  </div>
                </li>
               <li>
                  <div class="content">
                    <h6>Sr. Software Engineer</h6>
                    <span class="location">WeDEVs, Dhaka</span><br >
                    <p><a href="http://localhost:8000/job_details/2" class="read-more">Read More</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div> <!-- end .latest-jobs-section -->


          <div class="pricing-tables tables-3">
            <div class="pricing-tables-column">
             
            </div>

            <div class="pricing-tables-column">
           
            </div>

            <div class="pricing-tables-column">
           
            </div>
          </div> <!-- end .pricing-tables -->
        </div> <!-- end .page-content -->

        <div class="col-sm-4 page-sidebar">
          <aside>
            <div class="widget sidebar-widget white-container social-widget">
              <h5 class="widget-title">Share Us</h5>

              <div class="widget-content">
                <div class="row row-p5">
                  <div class="col-xs-6 col-md-3 share-box facebook">
                    <div class="count">86</div>
                    <a href="#">Facebook</a>
                  </div>

                  <div class="col-xs-6 col-md-3 share-box twitter">
                    <div class="count">2.2k</div>
                    <a href="#">Twitter</a>
                  </div>

                  <div class="col-xs-6 col-md-3 share-box google">
                    <div class="count">324</div>
                    <a href="#">Google +</a>
                  </div>

                  <div class="col-xs-6 col-md-3 share-box linkedin">
                    <div class="count">1.5k</div>
                    <a href="#">LinkedIn</a>
                  </div>
                </div>
              </div>
            </div>

          

            <div class="white-container">
     

              <div class="widget sidebar-widget">
                <h5 class="widget-title">The Poll</h5>

                <div class="widget-content">
                  <p>Are you satisfied with your current employer?</p>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sidebarpoll" value="" checked>
                      Definitely Yes
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="sidebarpoll" value="">
                      Rather Yes
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="sidebarpoll" value="">
                      I'm not sure
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="sidebarpoll" value="">
                      Rather Not
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="sidebarpoll" value="">
                      Not at all
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div> <!-- end .page-sidebar -->
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

