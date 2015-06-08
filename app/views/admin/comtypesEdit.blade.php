@extends('admin.layout.admin')
@section('content')
<h2 class="edit-post">
    Edit Category
    <span class="right">{{ HTML::linkRoute('comtypes.list','Cancel',null,['class' => 'button tiny radius']) }}</span>
</h2>
<hr>
{{ Form::open(['route'=>['comtype.update',$comtype->id]]) }}
<div class="row">
    <div class="small-5 large-5 column">
        {{ Form::label('name','Category Name:') }}
        {{ Form::text('name',Input::old('name',$comtype->name)) }}
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
{{ Form::submit('Update',['class'=>'button tiny radius']) }}
{{ Form::close() }}
@stop