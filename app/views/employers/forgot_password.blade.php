@extends('admin.layout.master')
@section('content')
<div class="small-6 large-6 column login-form">
   
        
        {{ Form::open(array('route' => 'employer-forgot-password-post')) }}
       
        <fieldset>
            <legend>Forgot Password</legend>
            {{ Form::label('email','Enter Email') }}
            {{ Form::text('email',Input::old('email'),['placeholder'=>'Your nice email']) }}
            
            {{ Form::submit('Submit',['class'=>'button tiny radius']) }}
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
