Welcome to the jobseeker home.
<nav>
	<ul>
		@if(Session::has('global'))
			<p>{{ Session::get('global') }}</p>
		@endif		
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		@if(Auth::jobseeker()->check())
			<li><a href="{{ URL::route('jobseeker-sign-out') }}">Signout</a></li>
			<li><a href="{{ URL::route('jobseeker-change-password') }}">Change Password</a></li>
			<p>Hello, {{ Auth::jobseeker()->get()->username }}.</p>	
		@else
			<li><a href="{{ URL::route('jobseeker-sign-in') }}">Jobseeker Sign in</a></li>
			<li><a href="{{ URL::route('jobseeker-create') }}">Jobseeker account creation</a></li>
			<li><a href="{{ URL::route('jobseeker-forgot-password') }}">Forgot password</a></li>
		@endif		
	</ul>
</nav> 