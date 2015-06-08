@extends('admin.layout.master')
@section('content')
<div class="small-6 large-6 column login-form">
   
        
        {{ Form::open(array('route' => 'change-password-post')) }}
       
        <fieldset>
            <legend>Change Password</legend>
            {{ Form::label('old_password','Old Password') }}
            {{ Form::password('old_password',['placeholder'=>'Your Old Password Here']) }}
            {{ Form::label('password','New Password') }}
            {{ Form::password('password',['placeholder'=>'New Password Here']) }}
            {{ Form::label('password_again','New Password') }}
            {{ Form::password('password_again',['placeholder'=>'Retype Password Again']) }}
            <h6><a href="#">Forgot Password</a></h6>
            {{ Form::submit('Change Password',['class'=>'button tiny radius']) }}
        </fieldset>
        {{ Form::close() }}
        @if($errors->has())
            @foreach ($errors->all() as $message)
                <span class="label alert round">{{$message}}</span><br><br>
            @endforeach
        @endif
        @if(Session::has('failure'))
            <span class="label alert round">{{Session::get('failure')}}</span>
        @endif
</div>
@stop
