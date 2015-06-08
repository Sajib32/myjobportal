<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
        <title>@yield('title')</title> 
    
{{ HTML::style('assets/admin/css/foundation.css') }}
    {{ HTML::style('assets/admin/css/custom.css') }}
    {{ HTML::script('./assets/admin/js/vendor/custom.modernizr.js') }}
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
            <li class="{{ (strpos(URL::current(),route('jobs.new'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('jobs.new','Submitted Jobs')}}
            </li >
            <li class="{{ (strpos(URL::current(),route('emp.list'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('emp.list','Employers List')}}
            </li>
            <li class="divider"></li>
            <li class="{{ (strpos(URL::current(),route('new.cat'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('new.cat','New Category')}}
            </li>
            <li class="{{ (strpos(URL::current(),route('jobcat.list'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('jobcat.list','Jobcategories List')}}
            </li>  
            <li class="divider"></li>
            <li class="{{ (strpos(URL::current(),route('new.com'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('new.com','New Company Type')}}
            </li>  
            <li class="{{ (strpos(URL::current(),route('comtypes.list'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('comtypes.list','Types of Company')}}
            </li>  
             <li class="divider"></li>
            <li class="{{ (strpos(URL::current(),route('seekers.list'))!== false) ? 'active' : '' }}">
                {{HTML::linkRoute('seekers.list','Jobseekers List')}}
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
{{ HTML::script('./assets/admin/js/vendor/jquery.js') }}
{{ HTML::script('./assets/admin/js/foundation.min.js') }}
<script>
    $(document).foundation();
</script>
</body>
</html>