<?php

class ExamLevel extends \Eloquent {
	protected $table = 'examlevels';
	protected $fillable = ['name'];

	public function qualification()
	{
		return $this->belongsTo('Qualification', 'examlevels');
	}
}