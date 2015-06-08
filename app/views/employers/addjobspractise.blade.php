
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
  <div class="row clearfix">
    
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-9">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
      <option value="3">Option three</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Text Input</label>  
  <div class="col-md-3">
    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  </div>


<!-- Multiple Radios (inline) -->

  <label class="col-md-3 control-label" for="radios">Inline Radios</label>
  <div class="col-md-3"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      No
    </label> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Text Input</label>  
  <div class="col-md-3">
    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  </div>
  <label class="col-md-3 control-label" for="textinput">Text Input</label>  
  <div class="col-md-3">
    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  </div>
 </div>
  
  <!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Text Area</label>
  <div class="col-md-9">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-3 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Ok</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>
    </div>
    
  </div>
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