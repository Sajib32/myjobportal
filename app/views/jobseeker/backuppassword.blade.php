@extends('layout.main')

@section('content')

	@if(Session::has('global'))
	<p style="color:red;">{{ Session::get('global') }}</p>
	@endif
	<form action="{{ URL::route('jobseeker-change-password-post') }}" method="post">
		<div class="field">
			Old password: <input type="password" name="old_password">
			@if($errors->has('old_password'))
				{{ $errors->first('old_password') }}
			@endif
		</div>
		<div class="field">
			New password: <input type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		<div class="field">
			New password again: <input type="password" name="password_again">
			@if($errors->has('password_again'))
				{{ $errors->first('password_again') }}
			@endif
		</div>

		<input type="submit" value="Change password">
		{{ Form::token() }}
	</form>
@stop