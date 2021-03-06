
<!DOCTYPE html>
<html class="no-js pattern_1">
<head>
<title>Job Page</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin,latin-ext"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/font-awesome.css') }}
    {{ HTML::style('assets/css/font-awesome-ie7.css') }}
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap-responsive.css') }}
    {{ HTML::style('assets/css/reset.css') }}
    {{ HTML::style('assets/css/color_scheme_1.css') }}
    {{ HTML::style('assets/css/jquery.combosex.css') }}
    {{ HTML::style('assets/css/jquery.flexslider.css') }}
    {{ HTML::style('assets/css/jquery.scrollbar.css') }}
    
<!--[if (lte IE 9)]>
    <link rel="stylesheet" type="text/css" href="css/iefix.css"/>
    <![endif]-->

    {{ HTML::script('assets/js/jquery.1.7.2.min.js') }}
{{ HTML::script('assets/js/jquery-ui.1.7.2.min.js') }}
{{ HTML::script('assets/js/jquery.combosex.min.js') }}
{{ HTML::script('assets/js/jquery.flexslider-min.js') }}
{{ HTML::script('assets/js/jquery.mousewheel.js') }}
{{ HTML::script('assets/js/jquery.easytabs.min.js') }}
{{ HTML::script('assets/js/jquery.scrollbar.min.js') }}
{{ HTML::script('assets/js/custom.js') }}
{{ HTML::script('assets/js/jquery.isotope.min.js') }}
</head>
<body>

<!-- Bar -->

<!-- /Bar --> 

<!-- Header -->
<div id="header">
  <div class="inner"> 
    
    <!-- Logo -->
    <div id="logo"> <a href="index.html">{{ HTML::image('/assets/img/Logo.jpg', '', array('width'=>'205px','height'=>'50px')) }}</a><a class="menu-hider"></a></div>
    <!-- /Logo -->
    
    <ul id="navigation">
      <li> <a href="index.html">Home</a></li>
      <li class="first expanded"><a href="jobs.html">Jobs</a>
        <ul class="submenu">
          <li><a href="jobs.html">Job listing</a></li>
          <li><a href="job.html">Job Details</a></li>
        </ul>
      </li>
      <li class="first expanded"><a href="candidates-listing.html">Candidates</a>
        <ul class="submenu">
          <li><a href="candidates-listing.html">Candidate Listing (with sidebar)</a></li>
          <li><a href="candidates-listing-no-sidebar.html">Candidate listing (without)</a></li>
<li><a href="candidate.html">Candidate</a></li>
        </ul>
      </li>
      <li><a href="partners.html">Partners</a></li>
      <li><a href="about-us.html">About Us</a></li>
      <li><a href="contacts.html">Contact</a></li>
    </ul>
    <div class="reponsive-nav">
   <select  class="select" name="menu1" id="menu1"> 
      <option value="index.html">Home</option>
      <option value="jobs.html">Job listing</option>
      <option value="job.html">Job Details</option>
      <option value="candidates-listing.html">Candidate Listing (with sidebar)</option>
      <option value="candidates-listing-no-sidebar.html">Candidate listing (without sidebar)</option>
      <option value="candidate.html">Candidate Details</option>
      <option value="partners.html">Partners</option>
      <option value="about-us.html">About Us</option>
      <option value="contacts.html">Contact</option>
    </select>
    </div>
  </div>
</div>
<!-- /Header --> 

<!-- Content -->
<div id="content">
  <div id="title">
    <h1 class="inner job_page title-2">{{ $job->job_title }} <span id="jobs-counter">- Envato, Sydney, AU</span>
      <ul class="breadcrumb-inner">
        <li> <a href="index.html">Home</a></li>
        <li> <a href="job-listing-1.html">Jobs</a></li>
        <li> <a href="job.html">Job Page</a></li>
      </ul>
    </h1>
  </div>
  <div class="inner"> 
      
    <!-- Content Inner -->
    <div class="content-inner"> 
 
      <!-- Content Left -->
      <div class="content-left">
        <div class="block background job_block">
    
          <h2 class="title-1">Job Details</h2>
          <div class="block-content">
            <table   border="" class="list_info">
              <tr>
                <td>Job ID:</td>
                <td></td>
              </tr>
              <tr>
                <td>Job Location</td>
                <td>Australia</td>
              </tr>
              <tr>
                <td>Company Industry</td>
                <td>IT/Computers</td>
              </tr>
              <tr>
                <td>Company Type</td>
                <td>Employer</td>
              </tr>
              <tr>
                <td>Job Role</td>
                <td>Front-End Developer</td>
              </tr>
              <tr>
                <td>Joining Date</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Employment Status</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Employment Type</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Monthly Salary</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Manages Others</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>No. of Vacancies</td>
                <td>1</td>
              </tr>
            </table>
          </div>
          <h2 class="title-1">Preferred Candidate</h2>
          <div class="block-content last">
            <table   border="" class="list_info">
              <tr>
                <td>Career Level</td>
                <td>Entry Level</td>
              </tr>
              <tr>
                <td>Years of Experience</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Residence Location</td>
                <td>Australia</td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Nationality</td>
                <td>Unspecified</td>
              </tr>
              <tr>
                <td>Degree</td>
                <td>Unspecified</td>
              </tr>
            </table>
          </div>
        </div>
        <div id="advertising" class="block border">
          <div class="block-content"> {{ HTML::image('/assets/img/sb-ad.jpg', '') }} 
            <!--<div class="advertising-test">300x250<br/>Ad Banner</div>--> 
          </div>
        </div>
      </div>
      <!-- /Content Left --> 
      
      <!-- Content Center -->
      <div class="content-center job-single">
        <div class="heading-l">
          <h2> Job Description </h2>
        </div>
        <div class="row-fluid">
          <div class="page-nav">
            <div class="span3">
              <button class="btn gray jobbtn">back to listing</button>
            </div>
            <div class="span2 pull-right">
              <button class="btn gray next-btn">Next</button>
            </div>
            <div class="span2 pull-right">
              <button class="btn gray pre-btn">Previous</button>
            </div>
          </div>
        </div>
        <div class=" content-center border box-1">

          <div class="divider line"></div>
          <div id="job-content-field">
            <div class="field-container single no_border">
              <div class="header-fields">
                <ul class="social_media_icons pull-right">
                  <li> <a href="#"><i class="fa fa-star"></i></a> </li>
                </ul>
                <div class="date">27<span>Jun</span></div>
                <div class="title-company">
                  <div class="title"><a href="#">Front-End Developer</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
                </div>
              </div>
              <div class="body-field">

                <div class="teaser">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="full-body" style="display: block">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="block-fields">
              <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
                <div class="block skills">
                  <h4>Responsibilities</h4>
                  <div class="block-content">
                    <ul class="skill_list">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Adipisicing elit</li>
                      <li>Proin nibh augue</li>
                      <li>Scelerisque sed</li>
                      <li>Cras vel lorem</li>
                      <li>Etiam pellentesque</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="block-fields">
                <div class="block skills">
                  <h4>Required Skills</h4>
                  <div class="block-content">
                    <div class = "field roll-with-description hide">
                      <div class = "roll-button"><span></span></div>
                      <div class = "roll-field">
                        <div class = "label">5 Years of Experience</div>
                        <div class = "progressbar"><span class = "progress-count" data-level = "60"></span></div>
                        <div class = "description">...</div>
                      </div>
                    </div>
                    <div class = "field roll-with-description hide">
                      <div class = "roll-button"><span></span></div>
                      <div class = "roll-field">
                        <div class = "label">Perfect Written &amp; Spoken English</div>
                        <div class = "progressbar"><span class = "progress-count" data-level = "100"></span></div>
                        <div class = "description">...</div>
                      </div>
                    </div>
                    <div class = "field roll-with-description show">
                      <div class = "roll-button"><span></span></div>
                      <div class = "roll-field">
                        <div class = "label">3 Foreign Languages</div>
                        <div class = "progressbar"><span class = "progress-count" data-level = "65"></span></div>
                        <div class = "description">Preferred languages are Arabic, French &amp; Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</div>
                      </div>
                    </div>
                    <!-- Cleaner -->
                    <div class="clear"></div>
                    <!-- /Cleaner --> 
                  </div>
                </div>
                <div class="block">
                  <h4>Additional Requirements</h4>
                  <div class="block-content">
                    <div class = "tag-field">Work Permit</div>
                    <div class = "tag-field">5 Years Experience</div>
                    <div class = "tag-field">MBA</div>
                    <div class = "tag-field">Magento Certified</div>
                    <div class = "tag-field">Perfect Written &amp; Spoken English</div>
                  </div>
                  <!-- Cleaner -->
                  <div class="clear"></div>
                  <!-- /Cleaner --> 
                </div>
              </div>
              <div class="buttons-field applybtns">
                <div class="apply"><a href="{{ URL::route('applyjobs', $cat->id) }}">Apply for This Job</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="heading-l">
          <h2> Recruiter’s Info </h2>
        </div>
        <div class="block border recruiter box-1 mr0">
          <div class="block-content">
            <div class="recruiter_photo">{{ HTML::image('/assets/img/recruiter.jpg', '') }} </div>
            <div class="recruiter_info">
              <div class="row-field">
                <div class="span3  pull-right first">
                  <ul class="social_media_icons  pull-right">
                    <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin-square"></i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-pinterest"></i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                  </ul>
                  <a href="#" class="btn blue pull-right">Send a Message</a> </div>
                <div class="span2 pull-left first">
                   <div class="recruiter_info-wrapper">
                  <div class="title">Jeffrey Richards</div>
                  <div class="location">Company Name</div>
                  </div>
                  <div class="description"> Tel (123) 123-4567<br/>
                    Fax (123) 123-4567 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <!-- Clear Line --> 
        <!--similar Jobs Block-->
   
        <!--/similar Jobs Block--> 
      </div>
      <!-- /Content Center -->
      <div class="clear"></div>
      <!-- Clear Line --> 
    </div>
    
    <!-- /Content Inner --> 
    
  </div>

</div>
<!-- /Content --> 

<!-- Footer -->

<div id="footer">
  <section class="footer-wrapper">
    <section class="row-fluid">
      <section class="inner">
        <div id="site-description">
          <h3>{{ HTML::image('/assets/img/Logo.jpg', '', array('width'=>'205px','height'=>'50px')) }}</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Praesent sodales velit quis augue. Cras suscipit.</p>
        </div>
        <div id="footer-menu">
          <div id="nav-menu" class="footer-menu span3">
            <h2>Navigation</h2>
            <div class="left">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="job-listing-1.html">Jobs</a></li>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="about-us.html">About Us</a></li>
              </ul>
            </div>
            <div class="right">
              <ul>
                <li><a href="contacts.html">Contact Us</a></li>
                <li><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div id="fol-menu" class="footer-menu span3">
            <h2>Follow Us</h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
          <div id="job-menu" class="footer-menu span3">
            <h2>Popular Jobs</h2>
            <ul>
              <li><a href="#">Web Developer</a></li>
              <li><a href="#">Web Designer</a></li>
              <li><a href="#">UX Engineer</a></li>
              <li><a href="#">Account Manager</a></li>
            </ul>
          </div>
        </div>
      </section>
    </section>
  </section>
</div>
<!-- /Footer -->
<div class="clearfix"></div>
<!-- Copyright -->
<div id="copyright">
  <div class="inner">
    <div class="row-fluid"> 
      <!-- Copyright Text -->
      <div id="copyright-text">Copyright 2013 <a href="http://uouapps.com/careers">Career</a> | All Rights Reserved | Design by <a href="http://uouapps.com/">UOU Apps</a></div>
      <!-- /Copyright Text --> 
      <!-- Copyright Social Link -->
      <div id="copyright-link">
        <div class="buttons">
          <ul class="top_soical_icons pull-right  ">
            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-linkedin-square"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-pinterest"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
          </ul>
        </div>
      </div>
      <!-- /Copyright Social Link --> 
      
      <a class="scrollTop" href="#header" style="display: none;">
      <div id = "up_container"> <span></span> </div>
      </a> </div>
  </div>
</div>
<!-- /Copyright -->

<!-- /Copyright -->
{{ HTML::style('assets/css/switcher.css') }}

 {{ HTML::script('assets/js/switcher.js') }}
</body>
</html>