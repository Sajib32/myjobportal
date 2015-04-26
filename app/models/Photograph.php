<?php

class Photograph extends \Eloquent {
	protected $fillable = ['image'];

	protected $table = 'photograph';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}