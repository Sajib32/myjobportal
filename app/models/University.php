<?php

class University extends \Eloquent {

	protected $table = 'universities';

	protected $fillable = ['name'];
	/*
	public function qualification()
	{
		return $this->belongsTo('Qualification', 'institute_name');
	}
	*/
}