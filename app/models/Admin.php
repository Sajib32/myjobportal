<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface {


use UserTrait, RemindableTrait;
	protected $fillable = ['email', 'password'];

	protected $table = 'admins';

	public function getAuthPassword() 
	{
		return $this->password;
	}
}