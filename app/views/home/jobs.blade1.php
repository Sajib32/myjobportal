<!DOCTYPE html>
<html class="no-js pattern_1">
<head>
<title>Jobs</title>
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
{{ HTML::script('assets/js/jquery.gmap.min.js') }}
</head>
<body>

<!-- Bar -->
<div id="bar">
  <div class="inner"> 
    
    <!-- Language Menu -->
    <ul id="lang-menu">
      <li id="en" class="current">En</li>
      <li id="fr"><a href="#">Fr</a></li>
      <li id="de"><a href="#">De</a></li>
      <li id="it"><a href="#">It</a></li>
    </ul>
    <!-- /Language Menu --> 
    
    <!-- User Menu -->
    <ul id="user-menu">
      <li id="login" class="first"><a href="#">Login</a></li>
      <li id="register"><a href="#">Register</a></li>
      <li id="bookmarks" class="last"><a href="#">Bookmarks</a></li>
    </ul>
    <!-- /User Menu --> 
    
  </div>
</div>
<!-- /Bar --> 

<!-- Header -->
<div id="header">
  <div class="inner"> 
    
    <!-- Logo -->
    <div id="logo"> <a href="index.html">{{ HTML::image('/assets/img/Logo.jpg', '', array('width'=>'205px','height'=>'50px')) }}</a><a class="menu-hider"></a></div>
    <!-- /Logo -->
    
    <ul id="navigation">
      <li> <a href="index.html">Home</a></li>
      <li class="first expanded current"><a href="jobs.html">Jobs</a>
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
    <h1 class="inner">Available Jobs<span id="jobs-counter">(350)</span>
      <ul class="breadcrumb-inner">
        <li> <a href="index.html">Home</a></li>
        <li> <a href="job.html">Job</a></li>
      </ul>
    </h1>
  </div>
  <div class="inner"> 
    
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Left -->
      <div class="content-left">
        <div id="search-filter" class="block background">
          
          <h2 class="title-1">Results Filtering</h2>
          <div class="block-content">
            
            <div class="filter-category">
              <h3>By Industry</h3>
              <div class="filter-content show">
                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <li><a href="#">Administration<span>(34)</span></a></li>
                      <li><a href="#">Manufacturing<span>(142)</span></a></li>
                      <li><a href="#">Healthcare &amp; Science<span>(67)</span></a></li>
                      <li><a href="#">Media &amp; Creative<span>(24)</span></a></li>
                      <li><a href="#">Transportation<span>(113)</span></a></li>
                    </ul>
                  </div>
                  <div class="minor hide">
                    <ul>
                      <li><a href="#">Administration<span>(34)</span></a></li>
                      <li><a href="#">Manufacturing<span>(142)</span></a></li>
                    </ul>
                    <div class="minor-label">See More</div>
                  </div>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>
            <div class="filter-category">
              <h3>By Type</h3>
              <div class="filter-content show">
                <div class="filter-container">
                  <div class="major">
                    <ul>
                      <li><a href="#">Banking/Finance Jobs<span>(581)</span></a></li>
                      <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                      <li><a href="#">Art/Design/Creative Jobs<span>(176)</span></a></li>
                      <li><a href="#">Customer Service Jobs<span>(334)</span></a></li>
                      <li><a href="#">Education/Training Jobs<span>(180)</span></a></li>
                    </ul>
                  </div>
                  <div class="minor hide">
                    <ul>
                      <li><a href="#">Banking/Finance Jobs<span>(581)</span></a></li>
                      <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                    </ul>
                    <div class="minor-label">See More</div>
                  </div>
                </div>
                <div class="show-hide-button"><span></span></div>
              </div>
            </div>

          </div>
        </div>
        <div id="advertising" class="block border">
          <div class="block-content"> {{ HTML::image('/assets/img/sb-ad.jpg', '') }} 
            <!--<div class="advertising-test">300x250<br/>
              Ad Banner</div>--> 
          </div>
        </div>
      </div>
      <!-- /Content Left --> 
      
      <!-- Content Center -->
      <div class="content-center">
        
        <div class="clear"></div>

        <div class="heading-l">
          <h2> Available Jobs </h2>
        </div>
        <div class="clear"></div>
        <div class="page-top-nav-bar jobpage-nav">
          <div class="mode-panel"> <a class="mode theme_color active  item"><span class="list"></span></a> <a class="mode theme_color item"><span class="cells"></span></a> <a class="mode theme_color item"><span class="table"></span></a> </div>
          <div class="page-sorter">
            <div class="sorter-select">
              <select class="select">
                <option selected="selected" value="Sort By">- Sort By -</option>
                <option value="Sort Criterion 1">Sort Criterion 1</option>
                <option value="Sort Criterion 2">Sort Criterion 2</option>
                <option value="Sort Criterion 3">Sort Criterion 3</option>
              </select>
            </div>
          </div>
          <div class="pager">
            <ul>
              <li class="prev noactive"><a></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li class="next"><a href="#"></a></li>
            </ul>
          </div>
        </div>
        <div class="clear"></div>
         @foreach($catjobs as $cat)
        <div id="job-content-fields">

          <div id="list" class="view_mode">
            <div class="field-container odd box-1">
               
              <div class="header-fields">
                
                <div class="title-company">
                  <div class="title"><a href="{{URL::route('view', $cat->id)}}">{{ $cat->job_title }}</a></div>
                  <div class="company">Envato - Sydney, Australia</div>
                </div>
  
              </div>
              
              <div class="body-field">
                <div class="teaser">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="read-more"><a>Read More</a></span></p>
                </div>
                <div class="full-body">
                  <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <ul class="candidate-meta meta-fields">
                  <li class="pull-left">Job Role: <span>Technology / IT</span></li>
                  <li class="pull-center">Industry: <span>Themes</span></li>
                  <li class="pull-right">Career Level: <span>Mid Career</span></li>
                </ul>
              </div>
            </div>
           
                        </div>
            </div>
             @endforeach
          </div>
        </div>
        <div class="clear"></div>
        <div class="job-page-bot-nav-bar">
          <div class="pager">
            <ul>
              <li class="prev noactive"><a></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li class="next"><a href="#"></a></li>
            </ul>
          </div>
        </div>
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