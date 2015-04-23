<?php

class Employment extends \Eloquent {
	protected $fillable = ['company_name','company_business','company_location','position_held','department','responsibilities','datefrom','dateto','exp_category','skills'];
	
	protected $table = 'employments';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}