@if(Session::has('global'))
	<p>{{ Session::get('global') }}</p>
@endif