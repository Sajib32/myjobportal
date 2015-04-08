<h1>Jobseeker Sign In:</h1>

<form action="{{ URL::route('jobseeker-sign-in-post') }}" method="post">

	<div class="field">
			Email: <input type="text" name="email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
 
		<div class="field">
			Password: <input type="password" name="password"{{ (Input::old('password')) ? ' value="' . e(Input::old('password')) . '"' : '' }}>
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
 
	<input type="submit" value="Sign In">
	{{ Form::token() }}
	
</form>
