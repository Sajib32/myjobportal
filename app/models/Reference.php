<?php

class Reference extends \Eloquent {
	protected $fillable = ['name', 'organization', 'designation', 'address', 'mobile', 'email', 'relation'];

	protected $table = 'references';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}