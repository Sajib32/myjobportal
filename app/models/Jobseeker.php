<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Jobseeker extends Eloquent implements UserInterface, RemindableInterface {


use UserTrait, RemindableTrait;
	protected $fillable = ['username', 'email', 'password', 'password_temp', 'code', 'active'];

	protected $table = 'jobseekers';

	public function getAuthPassword() 
	{
		return $this->password;
	}
}