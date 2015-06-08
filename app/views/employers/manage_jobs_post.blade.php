@extends('employers.employer')
@section('content')
<h2 class="post-listings">Job listings</h2><hr>
<table>
    <thead>
    <tr>
        <th style="width:300px;">Post Name</th>
        <th style="width:120px;">Posting Date</th>
        <th>Deadline</th>
        <th>Approved Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($manage as $m)
            <tr> 
               <td>{{ $m->job_title }}<br />{{HTML::linkRoute('edit_job','Edit',$m->id)}}
                    {{HTML::linkRoute('preview_job','Preview',$m->id)}}
               </td>
                <td>{{explode(' ',$m->created_at)[0]}}</td>
                <td>{{ $m->applying_last_date  }}</td>
              
                <td>{{ $m->approved }}</td>
                <td>{{HTML::linkRoute('jobs-delete','Delete',$m->id)}}</td>
            </tr>
    @endforeach
    </tbody>
</table>

{{$manage->links()}}

@stop