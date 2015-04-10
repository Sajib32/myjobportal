@extends('layout.main')

@section('content')
@if(Session::has('global'))
			<p>{{ Session::get('global') }}</p>
		@endif
	@if(Auth::jobseeker()->check())
			<p>Hello, {{ Auth::jobseeker()->get()->username }}.</p>	
			<li><a href="{{ URL::route('jobseeker-sign-out') }}">Signout</a></li>
		@else
			<p>Not signed in.</p>
		@endif
@stop