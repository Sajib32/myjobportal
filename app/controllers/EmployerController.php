<?php

class EmployerController extends \BaseController {

	public function index()
	{
		Mail::send('emails.auth.test', array('name'=>'Sajib'), function($message){
			$message->to('sajibcste@gmail.com', 'SajibNstu')->subject('Test email');
		});
		return View::make('employers.index');
	}

}