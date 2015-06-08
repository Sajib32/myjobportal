@extends('admin.layout.admin')
@section('content')
<h2 class="post-listings">Job listings</h2><hr>
<table>
    <thead>
    <tr>
        <th>Jobseeker Name</th>
        <th>Email</th>
        <th>Active</th>
        <th>Created At</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($seeker as $s)
            <tr>
                <td>{{$s->fullname}}</td>
                <td>{{$s->email}}</td>
                <td>{{ ($s->active == 1) ? 'yes' : 'no' }}</td>
                <td>Create date</td>
                 <td>{{HTML::linkRoute('seeker.delete','Delete',$s->id)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$seeker->links()}}
@stop