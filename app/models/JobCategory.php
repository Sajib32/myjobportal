<?php

class JobCategory extends \Eloquent {
	protected $fillable = ['name'];

	protected $table = 'jobcategories';

	public function jobdetails()
	{
		return $this->hasMany('JobDetail', 'jobcategories');
	}
}