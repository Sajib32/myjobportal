{{--
{{ $jobdetails->id }}
@foreach($jobdetails->jobseekers as $j)
{{ $j->fullname }}
{{ $j->email }}
@endforeach
--}}
@extends('employers.employer')
@section('content')
<h2 class="post-listings">Job listings</h2><hr>
<table>
    <thead>
    <tr>
        <th style="width:300px;">Post Name</th>
        <th style="width:120px;">Posting Date</th>
        <th>Deadline</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jobdetails as $j)
            <tr> 
               <td>{{ $j->job_title }}</td>
                <td>{{explode(' ',$j->created_at)[0]}}</td>

    
                <td>{{ $j->applying_last_date  }}</td>
              
          
                <td>{{HTML::linkRoute('applicants.show','Show',$j->id)}}</td>
            </tr>
    @endforeach
    </tbody>
</table>
@stop