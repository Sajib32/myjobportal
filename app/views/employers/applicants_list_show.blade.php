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
        <th style="width:300px;">Jobseekers Name</th>
        <th style="width:120px;">Email</th>
        <th>Show Profile</th>
    </tr>
    </thead>
    <tbody>
@foreach($jobdetails->jobseekers as $j)
            <tr> 
               <td>{{ $j->fullname }}</td>

    
                <td>{{ $j->email  }}</td>
              
          
                <td>{{HTML::linkRoute('show.profile','Show',$j->id)}}</td>
            </tr>
    @endforeach
    </tbody>
</table>
@stop