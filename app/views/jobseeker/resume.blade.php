
<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
 
    {{ HTML::style('assets/css/bootstrapemp.css') }}
    {{ HTML::style('assets/css/formValidationemp.css') }}

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    {{ HTML::script('assets/js/jquery.minemp.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/formValidation.js') }}
    {{ HTML::script('assets/js/bootstrap.js') }}
<script src="{{ URL::asset('js/bootstrap.datepicker.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/lib/bootstrap.datepicker.css') }}">
      <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/responsive.css') }}
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
        <h1>JOBSEEKER SIGN UP PAGE</h1>

        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">Jobs</a></li>
        </ul>
      </div>
    </div>
  </header> <!-- end #header -->
<div id="page-content">
<div class="container"> 
     <form id="defaultForm" method="post" class="form-horizontal" action="{{ URL::route('jobseeker-resume-post') }}">
     {{ Form::token() }}
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Personal Details</h2>
                </div>

               
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Full name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtName" placeholder="Full name here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Father's Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtFName" placeholder="your father's name here" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mother's Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtMName" placeholder="your mother's name here" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date Of Birth</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control input-datepicker dobText"  name="cboBdate" placeholder="MM/DD/YYYY" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-8">
                            <select name="cboGender" >
                    <OPTION value="-1" selected>Select</OPTION>
                    <OPTION value="Male" >Male</OPTION>
                    <OPTION value="Female" >Female</OPTION>
                  </select>
                        </div>
                    </div> 
                   <div class="form-group">
                        <label class="col-sm-3 control-label">Marital Status</label>
                        <div class="col-sm-8">
                            <select name="cboMStatus" >
                    <OPTION value="-1" selected>Select</OPTION>
                    <OPTION value="2" >Unmarried</OPTION>
                    <OPTION value="1" >Married</OPTION>
                    <OPTION value="3" >Single</OPTION>
                  </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-3 control-label">National ID No</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtNationalId"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Religion</label>
                        <div class="col-sm-8">
                                                        <select name="txtReligion" >
                    <OPTION value="-1" selected>Select</OPTION>
                    <OPTION value="2" >Islam</OPTION>
                    <OPTION value="1" >Hindu</OPTION>
                    <OPTION value="3" >Buddhist</OPTION>
                    <OPTION value="4" >Other</OPTION>
                  </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Present Address</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" type="text" id="txtPresentAdd" maxLength="250"  size="80" name="txtPresentAdd"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Permanent Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" type="text" id="txtPermanentAdd" maxLength="250"  size="80" name="txtPermanentAdd"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Mobile</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtMobile"/>
                        </div>
                    </div>     

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="txtEmail1"{{ (Input::old('txtEmail1')) ? ' value="' . e(Input::old('txtmail1')) . '"' : '' }} />
                       @if ($errors->has('txtEmail1'))<p style="color:red;">{{ $errors->first('txtEmail1') }}</p>@endif
                        </div>
                         @if(Session::has('global'))
    <p style="text-align:center; color:red;">{{ Session::get('global') }}</p>
  @endif
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>PROVIDE PASSWORD TO EDIT/UPDATE YOUR RESUME</h2>
                </div>
                    

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="txtPassword" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Retype Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="txtRetypePassword" />
                        </div>
                    </div>
            </div>
        </div>
            
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>PLEASE FILL UP THE BELOW CODE</h2>
                </div>
              
                    <div class="form-group">
                        <label class="col-sm-3 control-label" id="captchaOperation"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>
                                        <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                        </div>
                    </div>                                                   
              
            </div>     
            </div> 

            </form>
            </div>
            </div>
            

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
{{ HTML::script('assets/js/script.js') }}
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            txtName: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                   regexp: {
                        regexp: /^[a-z A-Z_.]+$/,
                        message: 'The username can only consist of alphabetical, dot.'
                    }
                }
            },
            txtFName: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                    regexp: {
                        regexp: /^[a-z A-Z_.]+$/,
                        message: 'The name can only consist of alphabetical, dot.'
                    }
                }
            },
            txtMName: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                    regexp: {
                        regexp: /^[a-z A-Z_.]+$/,
                        message: 'The name can only consist of alphabetical, dot.'
                    }
                }
            },            
            cboBdate: {
                validators: {
                    notEmpty: {
                        message: 'The date field is required'
                    }
                }
            },
            txtNationalId: {
                message: 'The National Id is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The National Id can only consist of number'
                    }
                }
            },   
            txtPresentAdd: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    },
                }
            },

            txtPermanentAdd: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    },
                }
            },  

            txtMobile: {
                message: 'The Mobile number is not valid',
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The Mobile number can only consist of number'
                    }
                }
            },    
            txtEmail1: {
                validators: {
                  notEmpty: {
                        message: 'The name is required'
                    },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
                    }
            },                          
            
            txtPassword: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            txtPassword: {
                validators: {
                  notEmpty: {
                        message: 'The password is required'
                    },
                }
            },
            txtRetypePassword: {
                validators: {
                  notEmpty: {
                        message: 'The password is required'
                    },
                    identical: {
                    field: 'txtPassword',
                    message: 'The password and its confirm are not the same'
                }
                }
            },                                               
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>
    <script type="text/javascript">
        $(function () {
            // datepicker plugin
            $('.input-datepicker').datepicker({
                format: 'DD, d MM, yyyy'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });     
        });
    </script>

</body>
</html>