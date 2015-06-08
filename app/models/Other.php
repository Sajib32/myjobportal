<?php

class Other extends \Eloquent {
	protected $fillable = ['category_name','skill_desc','extra_curri'];

	protected $table = 'others';

	public function jobseeker()
	{
		return $this->belongsTo('jobseeker');
	}
}