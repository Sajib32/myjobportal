@extends('employers.employer')
@section('content')
    <h2 class="post-listings">Job listings</h2><hr>
    {{ Form::open(['route'=>['edit-job-post']]) }}
    {{ Form::hidden('id', $jobedit->id) }}
    {{ Form::token() }}
  <div class="row">
    <div class="large-6 columns">
      <label>Job Title/Name
        <input type="text" name="title" value="{{ $jobedit->job_title }}" placeholder="Job Title/Name" />
      </label>
    </div>
    <div class="large-6 columns">
     <label>Job Category
        
 {{ Form::select('category[]', ['' => 'Select a category'] + $all_categories, $jobedit->jobcategory->id) }}
       
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Vacancy
        <input type="text" name="vacancy" value="{{ $jobedit->vacancy }}" placeholder="Vacancy" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>job Location
        <input type="text" name="location" value="{{ $jobedit->job_location }}" placeholder="job Location" />
      </label>
    </div>
  </div>
  <div class="row">    
        <div class="small-6 columns">
          <label>Applying Last Date
            <input type="text" name="last_date" value="{{ $jobedit->applying_last_date }}" class="span2" placeholder="date" id="dp1">
            <label>
        </div>      
        <div class="large-6 columns">
          <label>Salary
            <input type="text" name="salary" value="{{ $jobedit->salary }}" placeholder="salary" />
          </label>
        </div>
      </div>
 <div class="row">
    <div class="large-6 columns">
      <label>Application Submit Online</label>
      @if($jobedit->online_submit == 1)
      <input type="radio" name="apply" value="1" id="pokemonRed" checked="checked"><label for="pokemonRed">yes</label>
      <input type="radio" name="apply" value="0" id="pokemonBlue"><label for="pokemonBlue">no</label>
      @else
      <input type="radio" name="apply" value="1" id="pokemonRed"><label for="pokemonRed">yes</label>
      <input type="radio" name="apply" value="0" id="pokemonBlue" checked="checked"><label for="pokemonBlue">no</label>
      @endif
    </div>
    <div class="large-6 columns">
      <label>Job Nature</label>
      <select name="nature">
      @if($jobedit->job_nature == 'Part Time')
        <option value="{{ $jobedit->job_nature }}">{{ $jobedit->job_nature }}</option>
        <option value="Full Time">Full Time</option>
        <option value="Contractual">Contractual</option>
      @elseif($jobedit->job_nature == 'Full Time')
        <option value="{{ $jobedit->job_nature }}">{{ $jobedit->job_nature }}</option>
        <option value="Part Time">Part Time</option>
        <option value="Contractual">Contractual</option>
      @else
        <option value="{{ $jobedit->job_nature }}">{{ $jobedit->job_nature }}</option>
        <option value="Part Time">Part Time</option>
        <option value="Full Time">Full Time</option>
      @endif
      </select>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>job Responsibility
        <textarea name="responsibility">{{ $jobedit->job_responsibility }}</textarea>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Job Experience
        <textarea value="" name="experience">{{ $jobedit->experience }}</textarea>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Additional Requirements
        <textarea value="" name="requirements">{{ $jobedit->add_requirements }}</textarea>
      </label>
    </div>
  </div>
    <div class="row">
    <div class="large-12 columns">
      <label>Other Benefits
        <textarea value="" name="benefits">{{ $jobedit->other_benefits }}</textarea>
      </label>
    </div>
  </div>

    <div class="row">
    <div class="large-12 columns">
      <label>Applying Procedure
        <textarea name="procedure" value="">{{ $jobedit->apply_procedure }}</textarea>
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
