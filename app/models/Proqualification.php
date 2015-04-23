<?php

class Proqualification extends \Eloquent {
	protected $fillable = ['certification', 'institute', 'location', 'from', 'to'];

	protected $table = 'proqualifications';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}