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
                    <h1>{{HTML::link('/','Welcome to the page')}}</h1>
                    <h2>WelCome</h2>
                </hgroup>
            </div>
        </header>
    </div>
    <div class="row">
        @yield('content')
    </div>
    <div class="row">
        <div class="small-12 large-12 column">
            <footer class="site-footer">@Welcome to the site</footer>
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