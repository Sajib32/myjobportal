@extends('admin.layout.admin')
@section('content')
<h2 class="post-listings">Company Type listings</h2><hr>
<table>
    <thead>
    <tr>
        <th>Type Name</th>
        <th>Created At</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($type as $t)
            <tr>
                <td>{{$t->name}}</td>
                <td>{{explode(' ',$t->created_at)[0]}}</td>
                <td>{{HTML::linkRoute('comtypes.edit','Edit',$t->id)}}</td>            
                 <td>{{HTML::linkRoute('comtypes.delete','Delete',$t->id)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$type->links()}}
@stop