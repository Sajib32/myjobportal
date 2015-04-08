Welcome to the jobseeker home.
<nav>
	<ul>
		
		<li><a href="{{ URL::route('home') }}">Home</a></li>
		@if(Auth::jobseeker()->check())
			<li><a href="{{ URL::route('home') }}">Signout</a></li>
		@else
			<li><a href="{{ URL::route('jobseeker-sign-in') }}">Jobseeker Sign in</a></li>
			<li><a href="{{ URL::route('jobseeker-create') }}">Jobseeker account creation</a></li>
		@endif
		
	</ul>
</nav> 