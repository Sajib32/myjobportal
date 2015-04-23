<?php

class Training extends \Eloquent {
	protected $fillable = ['title', 'topics', 'institute', 'location', 'country', 'year', 'duration'];

	protected $table = 'trainings';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}