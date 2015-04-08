<?php

class JobseekerController extends \BaseController {

	public function home() {
		return View::make('jobseeker.home');
	}

	public function getProfile() {
		return View::make('jobseeker.profile');
	}

	public function getCreate() {
		return View::make('jobseeker.create');
	}
	public function postCreate() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|max:50|email|unique:jobseekers',
				'username' => 'required|max:20|min:3|unique:jobseekers',
				'password' => 'required|min:6',
				'password_again' => 'required|same:password',
			)
		);

		if($validator->fails()) {
			return Redirect::route('jobseeker-create')
				   ->withErrors($validator)
				   ->withInput();
		} else {
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');

			// Activation Code
			$code = str_random(60);

			$user = Jobseeker::create(array(
				'email' => $email,
				'username' => $username,
				'password' => Hash::make($password),
				'code'    => $code,
				'active' => 0
			));

			if($user) {
				Mail::send('emails.auth.activate', array('link' => URL::route('jobseeker-activate', $code), 'username' => $username), function($message) use ($user) {
					$message->to($user->email, $user->username)->subject('Activate your account');
				});

				return Redirect::route('jobseeker-showprofile')
					 ->with('global','Your account has been created! We have sent you an email to activate your account');
			}
		} 
		
	}

	public function getActivate($code) {
		$user = Jobseeker::where('code', '=', $code)->where('active', '=', 0);

			if($user->count()){
				$user = $user->first();

			// Update user to active state
			$user->active = 1;
			$user->code = '';

			if($user->save()) {
				return Redirect::route('jobseeker-showprofile')
					->with('global', 'Actived! you can now sign in');
			}
		}	
		

		return Redirect::route('jobseeker-showprofile')
				->with('global', 'We could not active your account');
	}

	public function getSignIn() {
		return View::make('jobseeker.signin');
	}

	public function postSignIn() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|email',
				'password' => 'required'
			)
		);

		if($validator->fails()) {
			return Redirect::route('jobseeker-sign-in')
				   ->withErrors($validator)
				   ->withInput();
		} else {
			Config::set('auth.model', 'Jobseeker');
			$auth = Auth::jobseeker()->attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'active' => 1
			));

			if($auth) {
				// Redirect to the intended page
				return Redirect::intended('/');
			} else {
				return Redirect::route('jobseeker-sign-in')
			   ->with('global', 'Email/password wrong, or account not activated.');
			}
		}

		return Redirect::route('jobseeker-sign-in')
			   ->with('global', 'There was a problem signing in you.');
	}
}