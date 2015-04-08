@extends('layout.main')

@section('content')
	@if(Auth::jobseeker()->check())
			<p>Hello, {{ Auth::jobseeker()->get()->username }}.</p>	
		@else
			<p>Not signed in.</p>
		@endif
@stop