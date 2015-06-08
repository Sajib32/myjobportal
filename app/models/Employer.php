<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Employer extends Eloquent implements UserInterface, RemindableInterface {


use UserTrait, RemindableTrait;
	protected $fillable = ['username', 'email', 'password', 'password', 'password_temp', 'code', 'active'];

	protected $table = 'employers';

	public function getAuthPassword() 
	{
		return $this->password;
	}

	public function empcompany()
	{
		return $this->hasOne('EmpCompany');
	}

	public function jobdetails()
	{
		return $this->hasMany('JobDetail');
	}

	public function delete()
	{
		foreach($this->jobdetails as $j)
		{
			$j->delete();
		}
		return parent::delete();
	}
}