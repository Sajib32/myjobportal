<?php

class Other extends \Eloquent {
	protected $fillable = ['company_name','field_of_spec','skill_desc','extra_curri'];

	protected $table = 'others';

	public function jobseeker()
	{
		return $this->belongsTo('jobseeker');
	}
}