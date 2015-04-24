<?php

class Qualification extends \Eloquent {
	protected $fillable = ['level_of_education','exam_title', 'institute_name', 'insOther', 'result', 'year_of_passing', 'duration',
							'achievement'];

	protected $table = 'qualifications';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}