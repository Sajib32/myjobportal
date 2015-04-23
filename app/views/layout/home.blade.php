<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @section('javascript')
    <script src="{{ URL::asset('js/script.js') }}"></script>

    @show

    @section('head')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
    @show
</head>
<body>
<!-- Top bar start -->
@section('navbar')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
             <nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 0px;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-left menu">
                        <li class="active"><a href="#">Jobseekers Zone <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Employers Zone</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Training</a></li>
                      </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@show
<!-- Top bar end -->
<div class="container">
    <!--second row-->
    <div class="row">
        @section('logo')
        <div class="col-xs-6 col-md-4"><h3>OnlineJobPortal</h3></div>
        @show
        @section('signup')
        <div class="col-xs-12 col-sm-6 col-md-8">
            <div class="row signupform">
                <form class="form-inline">
                    <div class="col-lg-4 email">             
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                          </div>
                          </div>  
                          <div class="col-lg-4 password">  
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword3">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                          </div>
                          </div>
                          <div class="col-lg-4 signin">  
                           <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                            <div class="row">
                              <div class="col-lg-4 remember">
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                </div>
                              
                              </div>
                              <div class="col-lg-5 forgot">
                                <p>Forgot Password</p>
                              </div>
                              <div class="col-lg-3 new">
                                  <p>Create New</p>
                              </div>
                            </div>
                    </form>
              
            </div>
        </div>
    @show
    </div>
    <!--second row end-->

    <!-- Third row -->
    <div class="row">
    @section('menu')
        <div class="col-lg-9">
            <div id='cssmenu'>
                <ul>
                   <li><a href='#'>Home</a></li>
                   <li><a href='#'>About</a></li>
                   <li><a href='#'>Submit CV</a></li>
                   <li class='has-sub'><a href='#'>Career Resources</a>
                      <ul>
                         <li class='has-sub'><a href='#'>Product 1</a>
                            <ul>
                               <li><a href='#'>Sub Product</a></li>
                               <li><a href='#'>Sub Product</a></li>
                            </ul>
                         </li>
                         <li class='has-sub'><a href='#'>Product 2</a>
                            <ul>
                               <li><a href='#'>Sub Product</a></li>
                               <li><a href='#'>Sub Product</a></li>
                            </ul>
                         </li>
                      </ul>
                   </li>
                   <li><a href='#'>For Employers</a></li>
                   <li><a href='#'>Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3">
            
        </div>
    @show
    </div>
   
    <!-- Third row end -->

    <!--Fourth row tab menu starts-->
    <div class="row">
    @section('nav-tabs')
        <div class="col-lg-9">
            <ul id="myTab" class="nav nav-tabs">
               <li class="active">
                  <a href="#home" data-toggle="tab">
                     Functional Category
                  </a>
               </li>
               <li><a href="#ios" data-toggle="tab">Industrial Category</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="row">
                        <div class="col-lg-4 hovering">
                             <ul style="list-style:none">
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Accounting/Finance</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Bank/ Non-Bank Fin. Institution (36)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Commercial/Supply Chain (83)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Education/Training (251)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Engineer/Architects (200)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Garments/Textile (322)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>HR/Org. Development (77)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Gen Mgt/Admin (261)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Design/Creative (38)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Production/Operation (37)</a></li>
                             </ul>
                        </div>
                        <div class="col-lg-4 hovering">
                            <ul style="list-style:none">
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Hospitality/ Travel/ Tourism (46)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Beauty Care/ Health & Fitness (0)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Electrician/ Construction/ Repair (18)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>IT & Telecommunication (274)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Marketing/Sales (387)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Customer Support/Call Centre (57)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Media/Advertisement/Event Mgt. (31)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Medical/Pharma (106)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Agro (Plant/Animal/Fisheries) (12)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>NGO/Development (116)</a></li>
                            </ul>
                        </div> 
                        <div class="col-lg-4 hovering">
                            <ul style="list-style:none">
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Research/Consultancy (13)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Secretary/Receptionist (68)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Data Entry/Operator/BPO (30)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Driving/Motor Technician (18)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Security/Support Service (71)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Law/Legal (10)</a></li>
                                <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Others (37)</a></li>
                             </ul>
                        </div>      
                    </div>
                </div>
                    <div class="tab-pane fade" id="ios">
                        <div class="row">
                            <div class="col-lg-4 hovering">
                                <ul style="list-style:none">
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 hovering">
                                <ul style="list-style:none">
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                </ul>
                            </div> 
                            <div class="col-lg-4 hovering">
                                <ul style="list-style:none">
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>Quick Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                    <li><i class="fa fa-arrow-circle-right"></i><a href='#'>More Links</a></li>
                                </ul>
                            </div>      
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-3 back">
                    <ul style="list-style:none">
                        <li><p class="text-danger">Quick links</p></li>
                        <li><p class="text-danger">More links</p></li>
                        <li><p class="text-danger">Special service</p></li>
                    </ul>
                </div>
                <div class="col-lg-3 back">
                    <ul style="list-style:none">
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Employer list</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Location Wise Jobs</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Job Mail</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 back">
                    <ul style="list-style:none">
                        <li><i class="fa fa-chevron-right"></i><a href='#'>New Jobs(24 hrs)</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Contractual Jobs</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Overseas Jobs</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 back">
                    <ul style="list-style:none">
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Deadline Tomorrow</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href='#'>Part Time Jobs</a></li>
                        <li><i class="fa fa-chevron-right"></i><a class="text-danger" href='#'>Government Jobs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
                <div class="col-lg-6 pic">
                    <img src="img/frost1.png" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    @show
    </div>
    <!--Fourth row end-->
    <div class="row">
    @section('hot-jobs')
        <div class="col-lg-12">
            <div class="col-lg-4">
                <h3>Hot Jobs</h3>
            </div>
            <div class="col-lg-8">
                <form class="navbar-form right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Job Search by keyword(s)" name="q">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        @show
    </div>  
    
    <div class="row"> 
    @section('jobsserial')
        <div class="col-lg-12">
            <div class="col-lg-4  rows">
                <table class="table table-striped">
                    <caption>Striped Table Layout</caption>
           <thead>
              <tr>
                 <th>Name</th>
                 <th>City</th>
                 <th>Pincode</th>
              </tr>
           </thead>
           <tbody>
              <tr>
                 <td>Tanmay</td>
                 <td>Bangalore</td>
                 <td>560001</td>
              </tr>
              <tr>
                 <td>Sachin</td>
                 <td>Mumbai</td>
                 <td>400003</td>
              </tr>
              <tr>
                 <td>Uma</td>
                 <td>Pune</td>
                 <td>411027</td>
              </tr>
           </tbody>
        </table>
                    </div>
                    <div class="col-lg-4  rows">
                        <table class="table table-striped">
                   <caption>Striped Table Layout</caption>
                   <thead>
                      <tr>
                         <th>Name</th>
                         <th>City</th>
                         <th>Pincode</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>Tanmay</td>
                         <td>Bangalore</td>
                         <td>560001</td>
                      </tr>
                      <tr>
                         <td>Sachin</td>
                         <td>Mumbai</td>
                         <td>400003</td>
                      </tr>
                      <tr>
                         <td>Uma</td>
                         <td>Pune</td>
                         <td>411027</td>
                      </tr>
                   </tbody>
                </table>
            </div>
            <div class="col-lg-4 rows">
                <table class="table table-striped">
                   <caption>Striped Table Layout</caption>
                   <thead>
                      <tr>
                         <th>Name</th>
                         <th>City</th>
                         <th>Pincode</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>Tanmay</td>
                         <td>Bangalore</td>
                         <td>560001</td>
                      </tr>
                      <tr>
                         <td>Sachin</td>
                         <td>Mumbai</td>
                         <td>400003</td>
                      </tr>
                      <tr>
                         <td>Uma</td>
                         <td>Pune</td>
                         <td>411027</td>
                      </tr>
                   </tbody>
                </table>
            </div>
        </div>
    @show
    </div>
</div>

    <!--last part-->
    @section('footer')
    <div class="menu-footer">    
        <div class="container">
            <div class="col-lg-12">
                <div class="col-md-3">
                <h2 style="font-size:17px;color: #ffffff;"><b>About Us</b></h2>
                    <hr>
                <p><a href="/" title="About OnlineJobPortal">About OnlineJobPortal</a></p>
                <p><a href="/themes" title="Terms & Conditions">Terms & Conditions</a></p>
                <p><a href="/bootstrap-template" title="International Partners">International Partners</a></p>
                <p><a href="/bootstrap-theme" title="Contact Us">Contact Us</a></p>
                </div>
                <div class="col-md-3">
                    <h2 style="font-size:17px;color: #ffffff;"><b>Job Seekers</b></h2>
                        <hr>
                    <p><a href="/blog" title="Post Resume">Post Resume</a></p>
                    <p><a href="https://www.prepbootstrap.com/login" title="Career Counseling">Career Counseling</a></p>
                    <p><a href="/faq" title="My Jobs">My Jobs</a></p>
                    <p><a href="/become-a-seller" title="FAQ">FAQ</a></p>
                </div>
                <div class="col-md-3">
                    <h2 style="font-size:17px;color: #ffffff;"><b>Employers</b></h2>
                        <hr>
                    <p><a href="/contact" title="Create Account">Create Account</a></p>
                    <p><a href="/license" title="Products/Service">Products/Service</a></p>
                    <p><a href="/terms-of-service" title="Post a Job">Post a Job</a></p>
                    <p><a href="/privacy-policy" title="FAQ">FAQ</a></p>
                </div>
                <div class="col-md-3">
                    <h2 style="font-size:17px;color: #ffffff;"><b>Follow Us</b></h2>
                    <hr>
                    <a class="fa fa-twitter pb-socialicon" href="https://twitter.com" target="_blank"></a>
                    <a class="fa fa-facebook pb-socialicon" href="https://www.facebook.com" target="_blank"></a>
                    <a class="fa fa-google-plus pb-socialicon" href="https://plus.google.com" target="_blank"></a> 
                    <a href="https://plus.google.com" target="_blank"><i class="fa fa-rss"></i></a>             
                </div>
            </div>
        </div>
    </div>
    @show

    <!--last part-->
    @section('copyright')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 footer">
                <p class="lead"><small>&copy; 2014 Frost. All rights reserved. Theme by elimis.</small></p>
            </div>
        </div>
    </div>
    @show




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>