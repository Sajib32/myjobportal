<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
        <title>@yield('title')</title> 
    <!-- CDN -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- foundation start -->
  
    {{ HTML::style('assets/admin/css/custom.css') }}
    {{ HTML::script('./assets/admin/js/vendor/custom.modernizr.js') }}
    {{ HTML::style('assets/admin/css/foundation.min.css') }}
    <!--    <link rel="stylesheet" href="foundation/css/app.css"> -->
    <!-- foundation end -->
    <!-- foundation datepicker start -->
    {{ HTML::script('assets/admin/js/foundation-datepicker.js') }}
     {{ HTML::style('assets/admin/css/foundation-datepicker.css') }}
{{ HTML::style('assets/admin/css/foundation.css') }}
{{ HTML::style('assets/admin/css/example.css') }}
    


</head>
<body>
<div class="row main">
    <div class="small-12 large-12 column" id="masthead">
        <header>
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <!-- Title Area -->
                    <li class="name"></li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="left">
                        <li class="{{(strcmp(URL::full(), URL::to('/')) == 0) ? 'active' : ''}}"><a href="{{URL::to('/')}}">Home</a></li>
                    </ul>
                    <ul class="right">
                        @if(Auth::check())
                            <li class="{{ (strpos(URL::current(), URL::to('admin/dash-board'))!== false) ? 'active' : '' }}">
                                {{HTML::link('admin/dash-board','Dashboard')}}
                            </li>
                            <li class="{{ (strpos(URL::current(), URL::to('logout'))!== false) ? 'active' : '' }}" >
                                {{HTML::link('logout','Logout')}}
                            </li>
                        @else
                            <li class="{{ (strpos(URL::current(), URL::to('login'))!== false) ? 'active' : '' }}">
                                {{HTML::link('login','Login')}}
                            </li>
                        @endif
                    </ul>
                </section>
            </nav>
            <div class="sub-header">
                <hgroup>
                    <h1>{{HTML::link('/','Welcome to the site')}}</h1>
                    <h2></h2>
                </hgroup>
            </div>
        </header>
    </div>
    <div class="small-3 large-3 column">
    <aside class="sidebar">
        <h3>Menu</h3>
        <ul class="side-nav">
            <li>{{HTML::linkRoute('admin-dash','Home')}}</li>
            <li class="divider"></li>
            <li class="{{ (strpos(URL::current(),route('add_jobs'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('add_jobs','Add New Job')}}
            </li>
            <li class="{{ (strpos(URL::current(),route('manage_jobs'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('manage_jobs','Manage Jobs')}}
            </li>

            <li class="{{ (strpos(URL::current(),route('applicants.list'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('applicants.list','Applicants List')}}
            </li>
            <li class="divider"></li>     
            <li class="{{ (strpos(URL::current(),route('change.password'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('change.password','Change Password')}}
            </li>            
            <li class="{{ (strpos(URL::current(),route('sign-out'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('sign-out','Sign Out')}}
            </li>  
        </ul>
    </aside>
</div>
<div class="small-9 large-9 column">
    <div class="content">
        @if(Session::has('success'))
        <div data-alert class="alert-box round">
            {{Session::get('success')}}
            <a href="#" class="close">&times;</a>
        </div>
        @endif

       @yield('content')    
    </div>
    <div id="comment-show" class="reveal-modal small" data-reveal>
        {{-- quick comment --}}
    </div>
</div>
    <div class="row">
        <div class="small-12 large-12 column">
            <footer class="site-footer"></footer>
        </div>
    </div>
</div>
<script>
    $(document).foundation();
</script>
</body>
</html>