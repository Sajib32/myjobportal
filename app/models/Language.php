<?php

class Language extends \Eloquent {
	protected $fillable = ['title', 'reading', 'writting', 'speaking'];

	protected $table = 'languages';

	public function jobseeker()
	{
		return $this->belongsTo('Jobseeker');
	}
}