@extends('employers.employer')
@section('content')
    <h2 class="post-listings">Job listings</h2><hr>
{{ Form::open(['route'=>['add_jobs-post']]) }}
{{ Form::token() }}
  <div class="row">
    <div class="large-6 columns">
      <label>Job Title/Name
        <input type="text" name="title" placeholder="Job Title/Name"/>
      </label>
    </div>
    <div class="large-6 columns">
     <label>Job Category
        
          <select name="category[]" class="detailsnoncap" id="select" style="width:auto">
        <option value="">Select Category</option>
        @foreach(JobCategory::all() as $jcat)
          <option value="{{ $jcat->id }}">{{ $jcat->name }}</option>
        @endforeach
        </select>
       
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Vacancy
        <input type="text" name="vacancy" placeholder="Vacancy" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>job Location
        <input type="text" name="location" placeholder="job Location" />
      </label>
    </div>
  </div>
  <div class="row">    
        <div class="small-6 columns">
          <label>Applying Last Date
            <input type="text" name="last_date" class="span2" placeholder="date" id="dp1">
            <label>
        </div>      
        <div class="large-6 columns">
          <label>Salary
            <input type="text" name="salary" placeholder="salary" />
          </label>
        </div>
      </div>
<div class="row">
    <div class="large-6 columns">
      <label>Application Submit Online</label>
      <input type="radio" name="apply" value="1" id="pokemonRed"><label for="pokemonRed">yes</label>
      <input type="radio" name="apply" value="0" id="pokemonBlue"><label for="pokemonBlue">no</label>
    </div>
    <div class="large-6 columns">
      <label>Job Nature</label>
      <select name="nature">
        <option value="Part Time">Part Time</option>
        <option value="Full Time">Full Time</option>
        <option value="Contractual">Contractual</option>
      </select>
    </div>
  </div>
 
  <div class="row">
    <div class="large-12 columns">
      <label>job Responsibility
        <textarea placeholder="job Responsibility" name="responsibility"></textarea>
        <span><h6>[if more than one line pls enter]</h6></span>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Job Experience
        <textarea placeholder="Job Experience" name="experience"></textarea>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Additional Requirements
        <textarea placeholder="Additional Requirements" name="requirements"></textarea>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Other Benefits
        <textarea placeholder="Other Benefits" name="benefits"></textarea>
      </label>
    </div>
  </div>

    <div class="row">
    <div class="large-12 columns">
      <label>Applying Procedure
        <textarea placeholder="Applying Procedure" name="procedure"></textarea>
      </label>
    </div>
  </div>

  {{ Form::submit('Submit',['class'=>'button tiny radius']) }}
</form>
{{ Form::close() }}
    <script>
      $(function () {
        window.prettyPrint && prettyPrint();
        $('#dp1').fdatepicker({
          format: 'mm-dd-yyyy'
        });
      })();
    </script>
@stop
