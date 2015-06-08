@extends('admin.layout.admin')
@section('content')
<h2 class="post-listings">Employer lists</h2><hr>
<table>
    <thead>
    <tr>
        <th>User Name</th>
        <th>Company Name</th>
        <th>Active</th>
        <th>Created At</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($emp as $e)
            <tr>
                <td>{{$e->username}}</td>
                <td>{{$e->empcompany->company_name}}</td>
                <td>{{ ($e->active == 1) ? 'yes' : 'no' }}</td>
                <td>Create date</td>
                 <td>{{HTML::linkRoute('emp.delete','Delete',$e->id)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$emp->links()}}
@stop