
<!DOCTYPE html>
<html>
<head>
    <title>FormValidation demo</title>
 
    {{ HTML::style('assets/css/bootstrapemp.css') }}
    {{ HTML::style('assets/css/formValidationemp.css') }}

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    {{ HTML::script('assets/js/jquery.minemp.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/formValidation.js') }}
    {{ HTML::script('assets/js/bootstrap.js') }}
</head>
<body>
    <div class="container">
     <form id="defaultForm" method="post" class="form-horizontal" action="{{ URL::route('EmpAccount-post') }}">
     {{ Form::token() }}
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Account Information</h2>
                </div>

               
                    <div class="form-group">
                        <label class="col-sm-3 control-label">User name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="username" placeholder="User name" />
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email address</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>

          
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Company Details</h2>
                </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="companyname" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact Person</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="person" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact Person's Designation</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="designation" />
                        </div>
                    </div>
               
            </div>
        </div>

            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Industry Type</h2>
                </div>
          
                   <div class="form-group">
                        <label class="col-sm-3 control-label">Company Type</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="company_type" />
                        </div>
                    </div>
              
  
                </div>
            </div>


            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header">
                    <h2>Primary Contact details</h2>
                </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Company Address</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Country</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="country" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">City</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact Mobile</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="contact_mobile" />
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Contact Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="contact_email" />
                        </div>
                    </div>  
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Website Address (URL)</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="url" />
                        </div>
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
              </form>
      
    </div>

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
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
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
            companyname: {
                validators: {
                    notEmpty: {
                        message: 'The company name is required'
                    }
                }
            },
            person: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            designation: {
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            contact_mobile: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    }
                    }
                },
            
            contact_email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },    
            url: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
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
</body>
</html>