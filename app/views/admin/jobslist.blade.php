@extends('admin.layout.admin')
@section('content')
<h2 class="post-listings">Job listings</h2><hr>
<table>
    <thead>
    <tr>
        <th>Employer Name</th>
        <th>Job Title</th>
        <th>At Category</th>
        <th>Approved</th>
        <th>Last Date</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($jobs as $j)
            <tr>
                
               <td>{{$j->employer->username}}</td>
               
                <td>{{$j->job_title}}</td>
                <td>{{$j->jobcategory->name}}</td>
                <td>
                    {{Form::open(['route'=>['jobdetails.update',$j->id]])}}
                    {{Form::select('status',['yes'=>'Yes','no'=>'No'],$j->approved,['style'=>'margin-bottom:0','onchange'=>'submit()'])}}
                    {{Form::close()}}
                </td>
                <td>{{ $j->applying_last_date }}</td>
                <td>{{HTML::linkRoute('jobdetails.delete','Delete',$j->id)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$jobs->links()}}
@stop