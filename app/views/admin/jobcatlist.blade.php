@extends('admin.layout.admin')
@section('content')
<h2 class="post-listings">JobCategory lists</h2><hr>
<table>
    <thead>
    <tr>
        <th>Category Name</th>
        <th>Created At</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($jobcat as $jcat)
            <tr>
                <td>{{$jcat->name}}</td>
                <td>{{explode(' ',$jcat->created_at)[0]}}</td>
                <td>{{HTML::linkRoute('category.edit','Edit',$jcat->id)}}</td>            
                 <td>{{HTML::linkRoute('jobcat.delete','Delete',$jcat->id)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$jobcat->links()}}
@stop