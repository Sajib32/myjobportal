
<!DOCTYPE html>
<html class="no-js pattern_1">
<head>
<title>Careers - Job Board Templete</title>

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
      <li class="current"> <a href="index.html">Home</a></li>
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

<!-- Search -->
<div id="search">
  <div class="inner">
    <form id="search-form" action="index.html" class="search-bar-home">
      

      
      <input type="text" placeholder="Location" class="textfield-with-callback"/>
      <input type="text" placeholder="Industry / Role" class="textfield-with-callback"/>
      <input type="submit" value="Search" id="search-submit" class="pull-right"/>
    </form>
    <div id="more-options"></div>
    <div class="clear"></div>
    <!-- Clear Line -->
    
    <div id="options"></div>
  </div>
</div>
<!-- /Search --> 

<!-- Content -->
<div id="content"> 
  
  <!-- Banner Area -->
  <section class="header-banner">
    <div class="inner"> 
      <!-- Panel 3 -->
      <div id="login-panel">
        <div class="left">
          <div class="first">
            <div class="counter">
              <ul id="counter">
                <li class="unvis">0</li>
                <li>7</li>
                <li class="border"></li>
                <li>9</li>
                <li>4</li>
                <li>5</li>
              </ul>
              <div class="counter-label">Jobs</div>
            </div>
            <div id="find-job-buttom"><a>Sign In</a></div>
          </div>
          <div class="second">
            <div class="form">
              <form id="login-1" action="index.html">
                <input type="text" placeholder="Email" class="textfield"/>
                <input type="password" placeholder="Password" class="textfield"/>
                <input type="submit" value="Sign In" id="login-submit-1"/>
              </form>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="first">
            <div class="badge"></div>
            <div id="post-job-buttom"><a>Post a Job</a></div>
          </div>
          <div class="second">
            <div class="form">
              <form id="login-2" action="index.html">
                <input type="text" placeholder="Email" class="textfield"/>
                <input type="password" placeholder="Password" class="textfield"/>
                <input type="submit" value="Sign In" id="login-submit-2"/>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /Panel 3 --> 
    </div>
  </section>
  <!-- /Banner Area -->
  <div class="clear"></div>
  <div class="inner"> 
    <!-- Content Inner -->
    <div class="content-inner"> 
      
      <!-- Content Center -->
      <div class="content-center frontpage">
   
        <div id="explore" class="non-title-border">
          <div class="block-content">


            <div id="industry"  class="box-1">
              <div class="scroll-container">
                <div class="left">
                  <h4>Administrative and Support Services</h4>
                  <ul>
                    <li><a href="#">Support Services<span>(34)</span></a></li>
                    <li><a href="#">Consulting Services<span>(142)</span></a></li>
                    <li><a href="#">Customer Service<span>(67)</span></a></li>
                    <li><a href="#">Employment Placement<br/>
                      Agencies/Recruiting<span>(24)</span></a></li>
                    <li><a href="#">Human Resources<span>(113)</span></a></li>
                    <li><a href="#">Legal<span>(27)</span></a></li>
                    <li><a href="#">Administration<span>(57)</span></a></li>
                    <li><a href="#">Contracts/Purchasing<span>(29)</span></a></li>
                    <li><a href="#">Secretarial<span>(22)</span></a></li>
                    <li><a href="#">Security<span>(26)</span></a></li>
                    <li><a href="#">Telemarketing<span>(4)</span></a></li>
                    <li><a href="#">Translation<span>(12)</span></a></li>
                    
                  </ul>
                 
                </div>
                <div class="right">
                  <h4>Manufacturing and Industrial</h4>
                  <ul>
                    <li><a href="#">Agriculture/Forestry/Fishing<span>(42)</span></a></li>
                    <li><a href="#">Installation, Maintenance<span>(37)</span></a></li>
                    <li><a href="#">Manufacturing and Production<span>(96)</span></a></li>
                    <li><a href="#">Accounting/Banking/Finance Jobs<span>(581)</span></a></li>
                    <li><a href="#">Administration Jobs<span>(406)</span></a></li>
                    <li><a href="#">Art/Design/Creative Jobs<span>(176)</span></a></li>
                    <li><a href="#">Customer Service Jobs<span>(334)</span></a></li>
                    <li><a href="#">Education/Training Jobs<span>(180)</span></a></li>
                    <li><a href="#">Engineering Jobs<span>(978)</span></a></li>
                    <li><a href="#">Healthcare/Medical Jobs<span>(131)</span></a></li>
                    <li><a href="#">Human Resources/Personnel Jobs<span>(318)</span></a></li>
                    <li><a href="#">Law/Legal Jobs<span>(61)</span></a></li>
                   

                </div>
                <div class="clear"></div>
              </div>
    
            </div>
  
      
          </div>
        </div>
        <div class="clear"></div>
        <!--Latest Jobs Block-->
        <div id="latest-job">
          <div class="heading-l">
            <h2> Latest Jobs </h2>
          </div>
          <div class="latest-job-wrapper">
            <div class="block-content dott-flexslider box-1">
              <ul class="slides">
                <li>                 
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>    
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                 
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                 
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                  
                  <div class="company-text">
                    <div class="title"><a href="#">Front-End Developer at Envato</a>
                      <div class="location">Sydney, Australia</div>
                    </div>
                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. <a>Read More</a></div>
                  </div>
                </li>
                <li>
                  
           
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/Latest Jobs Block-->
        <div class="clear"></div>
        <!--Partners Block-->

        <!--Partners Block-->
        <div class="clear"></div>
        <!--Price Table Block-->

        
        <!--Price Table Block--> 
        
      </div>
      <!-- /Content Center --> 
      
      <!-- Content Right -->
      <div class="content-right">
        <div id="social-like" class="block background">
          <h2 class="title-1">Share Us With Your Friends</h2>
          <div class="block-content">
            <div class="social-like linkedin"><a class="like-button" href="#">LinkedIn</a><span class="count">500</span></div>
            <div class="social-like motibu"><a class="like-button" href="#">Motibu</a><span class="count">2.7K</span></div>
            <div class="social-like facebook"><a class="like-button" href="#">Facebook</a><span class="count">1.3K</span></div>
            <div class="social-like twitter"><a class="like-button" href="#">Twitter</a><span class="count">868</span></div>
          </div>
        </div>
        <div id="advertising" class="block border">
          <div class="block-content"> {{ HTML::image('/assets/img/sb-ad.jpg', '') }}  
            <!-- <div class="advertising-test">300x250<br/>
              Ad Banner</div>--> 
          </div>
        </div>
        <div id="poll" class="block background">
          <h2 class="title-1">5 Tips to pass your interview!</h2>
          <!--<iframe width="260" height="150" src="http://www.youtube.com/embed/wqGfDdJDONI?wmode=transparent" frameborder="0" allowfullscreen></iframe>-->
          <div class="ad-wrapper"> <img src="images/sb-video.jpg"  alt="sb-video"/> </div>
          <h2 class="title-1">The Poll</h2>
          <div class="block-content">
            <form id="poll-form" action="index.html">
              <ul id="radio-checkbox-list">
                <li>
                  <input id="poll_choice_1" type="radio" name="poll-choice" value="1" />
                  <label for="poll_choice_1" >Definitely Yes</label>
                </li>
                <li>
                  <input id="poll_choice_2" type="radio" name="poll-choice" value="2"/>
                  <label for="poll_choice_2">Rather Yes</label>
                </li>
                <li>
                  <input id="poll_choice_3" type="radio" name="poll-choice" value="3"/>
                  <label for="poll_choice_3">I’m Not Sure</label>
                </li>
                <li>
                  <input id="poll_choice_4" type="radio" name="poll-choice" value="4"/>
                  <label for="poll_choice_4">Rather Not</label>
                </li>
                <li>
                  <input id="poll_choice_5" type="radio" name="poll-choice" value="5" />
                  <label for="poll_choice_5">No Way!</label>
                </li>
              </ul>
              <button class="btn blue">Vote Now</button>
            </form>
          </div>
        </div>
        <div id="google" class="block">
          <div class="block_title"> Ads by Google </div>
          <div class="block_content">
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
            <div class="one_ad">
              <div class="title"> Find Your Dream Job With Career </div>
              <div class="text"> Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. </div>
              <div class="link"><a href="#">example.com</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Content Right -->
      
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