
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> </title>
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/bootstrap-responsive.css') }}
    {{ HTML::style('assets/css/font-awesome.css') }}
    {{ HTML::style('assets/css/font-awesome-ie7.css') }}
<!--[if IE]>
<style type="text/css">
.top_menu ul {display:inline-block;}
.top_menu ul {*display:inline;}
.top_menu ul li {float:left;}
.top_menu {text-align:center;}
.nav li:hover > a {
    background-color: #868787; color: #fff; margin:0px 0px 0px 1px; 
}
.career ul {
position: absolute; margin:0px 0px 0px 0px; top:35px; list-style: none; display: block;
}
.oth_jobs ul {
position: absolute; margin:0px 0px 0px 0px; top:35px; list-style: none; display: block;
}
</style>
<![endif]-->
</head>
<body>
<div>		
<form method="post" action="{{ URL::route('submit') }}" class="form-horizontal">
{{ Form::hidden('id', $catjobs->id) }}
 @foreach($jobs as $job)
  <div class="form-group">
    <label class="col-sm-2 control-label">Company Name</label>
    <div class="col-sm-10">
      <p class="form-control-static">{{ $job->empcompany->company_name }}</p>
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Expected Salary</label>
    <div class="col-sm-10">
      <input type="text" name="salary" class="form-control" id="inputPassword" placeholder="Expected Salary">
    </div>
  </div>
  @if(Auth::jobseeker()->check())
  <div class="form-group">
    <label class="col-sm-2 control-label">Registered Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">{{ Auth::jobseeker()->get()->email }}</p>
    </div>
  </div>
  @else
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Registered Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="inputPassword" placeholder="Registered Email">
    </div>
  </div>
      <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
    </div>
  </div>
  @endif

  <button type="submit" class="btn btn-default">Submit</button>
  {{ Form::token() }}
  @endforeach
</form>
</div>
</body>
</html>
