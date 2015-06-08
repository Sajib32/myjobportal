<?php

class Qualification extends \Eloquent {
	protected $fillable = ['jobseeker_id','examlevel_id','exam_title','major', 'institute_name', 'insOther',
	 'result','marks', 'year_of_passing', 'duration', 'achievement'];

	protected $table = 'qualifications';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}

    public function setResultAttribute($result)
    {

    	if($result == '1'){
        	$this->attributes['result'] = 'First Division';
    	}
    	elseif($result == '2') {
    		$this->attributes['result'] = 'Second Division';
    	}
    	elseif($result == '3'){
    		$this->attributes['result'] = 'Third Division';
    	}
    	else{
    		$this->attributes['result'] = $result;
    	}
    }
    /*
    public function university()
    {
        return $this->belongsTo('University');
    }
    */
    public function examlevel()
    {
        return $this->belongsTo('ExamLevel');
    }
}