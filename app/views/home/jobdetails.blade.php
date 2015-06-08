<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Jobs Single - Careers</title>

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
              <a href="#">Candidates</a>
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
        <h1>Front-end Developer <small>Envato, Sydney, AU</small></h1>

        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Front-end Developer</a></li>
        </ul>
      </div>
    </div>
  </header> <!-- end #header -->

  <div id="page-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 page-sidebar">
          <aside>
            <div class="widget sidebar-widget white-container candidates-single-widget">
              <div class="widget-content">
                

                <h5 class="bottom-line">Job Details</h5>
@foreach($jobs as $j)
                <table>
                  <tbody>
                    <tr>
                      <td>Published On</td>
                      <td>{{explode(' ',$j->created_at)[0]}}</td>
                    </tr>

                    <tr>
                      <td>Location</td>
                      <td>{{ $j->job_location }}</td>
                    </tr>
                    <tr>
                      <td>No. Of Vacancy</td>
                      <td>{{ $j->vacancy }}</td>
                    </tr>
                    <tr>
                      <td>Job Nature</td>
                      <td>{{ $j->job_nature }}</td>
                    </tr>
                
                    <tr>
                      <td>Experience</td>
                      <td>{{ $j->experience }}</td>
                    </tr>
                    <tr>
                      <td>Age</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Salary</td>
                      <td>{{ $j->salary }}</td>
                    </tr>
                    <tr>
                      <td>Application Deadline</td>
                      <td>{{ $j->applying_last_date }}</td>
                    </tr>                    
                  </tbody>
                </table>

                

              </div>
            </div>
          </aside>
        </div> <!-- end .page-sidebar -->

        <div class="col-sm-8 page-content">
          <div class="clearfix mb30 hidden-xs">
            <a href="#" class="btn btn-gray pull-left">Back to Listings</a>
            <div class="pull-right">
              <a href="#" class="btn btn-gray">Previous</a>
              <a href="#" class="btn btn-gray">Next</a>
            </div>
          </div>

          <div class="jobs-item jobs-single-item">
            
            <div class="clearfix visible-xs"></div>
           
            <h6 class="title"><a href="#">{{ $j->job_title }}</a></h6>
             
            <span class="meta"><h2>{{ $j->employer->empcompany->company_name }}</h2></span>
            
            <ul class="top-btns">
              <li><a href="#" class="btn btn-gray fa fa-star"></a></li>
            </ul>
            <h5>No. Of Vacancies</h5><span class="vacancy">{{ $j->vacancy }}</span>
            
            <h5>Job Description/Responsibility</h5>

            <ul>
              <li>{{ Testing::chk($j->edu_qualification) }}</li>
            </ul>

            <h5>Job Nature</h5>
            <span class="vacancy">{{ $j->job_nature }}</span>

            <h5>Educational Requirements</h5>
            <ul>
              <li>{{ Testing::chk($j->edu_qualification) }}</li>
            </ul>


            <h5>Additional Job Requirements</h5>
            <ul>
              <li>{{ Testing::chk($j->edu_qualification) }}</li>
            </ul>

            <h5>Job Location</h5>
            <span class="vacancy">{{ $j->job_location }}</span>
            <h5>Salary</h5>
            <span class="vacancy">{{ $j->salary }}</span>
            <h5>Other Benefits</h5>
           <li>{{ Testing::chk($j->edu_qualification) }}</li>

       
            <hr>

            <div class="clearfix">
            @if($j->online_submit == 1)
              <a href="{{ URL::route('applyjobs', $j->id) }}" class="btn btn-default pull-left">Apply for this Job</a>
            @else
              {{ $j->apply_procedure }}
            @endif
              <ul class="social-icons pull-right">
                <li><span>Share</span></li>
                <li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
                <li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
                <li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
              </ul>
            </div>
          </div>

          <div class="title-lines">
            <h3 class="mt0">About the Recruiter</h3>
          </div>

          <div class="about-candidate-item">

            <h6 class="title"><a href="#">Username: {{ $j->employer->username }}</a></h6>
            <span class="meta">Company Name: {{ $j->employer->empcompany->company_name }}</span>

            <ul class="social-icons clearfix">
              <li><a href="#" class="btn btn-gray fa fa-facebook"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-twitter"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-google-plus"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-dribbble"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-pinterest"></a></li>
              <li><a href="#" class="btn btn-gray fa fa-linkedin"></a></li>
            </ul>

            <ul class="list-unstyled">
              <li><strong>Mob:</strong>{{ $j->employer->empcompany->mobile }}</li>
              <li><strong>Website:</strong> <a href="#">{{ $j->employer->empcompany->website }}</a></li>
            </ul>

            <a href="#" class="btn btn-default">Send Message</a>
          </div>
          @endforeach
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

