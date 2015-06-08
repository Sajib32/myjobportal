@extends('admin.layout.admin')
@section('content')
<h2 class="new-post">
    Add New Category
    <span class="right">{{ HTML::link('admin/dash-board','Cancel',['class' => 'button tiny radius']) }}</span>
</h2>
<hr>
{{ Form::open(['route'=>['type.save']]) }}
<div class="row">
    <div class="small-5 large-5 column">
        {{ Form::label('name','Category Title:') }}
        {{ Form::text('name',Input::old('name')) }}
    </div>
</div>
@if($errors->has())
@foreach($errors->all() as $error)
<div data-alert class="alert-box warning round">
    {{$error}}
    <a href="#" class="close">&times;</a>
</div>
@endforeach
@endif
{{ Form::submit('Save',['class'=>'button tiny radius']) }}
{{ Form::close() }}
@stop