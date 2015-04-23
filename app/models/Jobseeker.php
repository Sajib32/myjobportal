<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Jobseeker extends Eloquent implements UserInterface, RemindableInterface {


use UserTrait, RemindableTrait;
	protected $fillable = ['fullname','mothersname','fathersname','gender',
	'marital','religion','dateofbirth','nationalid','email', 'password', 'password_temp', 'code', 'active'];

	protected $table = 'jobseekers';

	public function getAuthPassword() 
	{
		return $this->password;
	}

	public function qualifications()
	{
		return $this->hasMany('Qualification','jobseekers');
	}
	public function proqualifications()
	{
		return $this->hasMany('Proqualification','jobseekers');
	}
	public function trainings()
	{
		return $this->hasMany('Trainings','jobseekers');
	}
	public function employments()
	{
		return $this->hasMany('Employment', 'jobseekers');
	}
	public function others()
	{
		return $this->hasMany('Other', 'jobseekers');
	}
	public function languages()
	{
		return $this->hasMany('Language', 'jobseekers');
	}

}
