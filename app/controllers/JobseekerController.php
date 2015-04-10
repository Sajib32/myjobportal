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
				'jobseekername' => 'required|max:20|min:3|unique:jobseekers',
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
			$jobseekername = Input::get('jobseekername');
			$password = Input::get('password');

			// Activation Code
			$code = str_random(60);

			$jobseeker = Jobseeker::create(array(
				'email' => $email,
				'jobseekername' => $jobseekername,
				'password' => Hash::make($password),
				'code'    => $code,
				'active' => 0
			));

			if($jobseeker) {
				Mail::send('emails.auth.activate', array('link' => URL::route('jobseeker-activate', $code), 'jobseekername' => $jobseekername), function($message) use ($jobseeker) {
					$message->to($jobseeker->email, $jobseeker->jobseekername)->subject('Activate your account');
				});

				return Redirect::route('jobseeker-showprofile')
					 ->with('global','Your account has been created! We have sent you an email to activate your account');
			}
		} 
		
	}

	public function getActivate($code) {
		$jobseeker = Jobseeker::where('code', '=', $code)->where('active', '=', 0);

			if($jobseeker->count()){
				$jobseeker = $jobseeker->first();

			// Update jobseeker to active state
			$jobseeker->active = 1;
			$jobseeker->code = '';

			if($jobseeker->save()) {
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

			$remember = (Input::has('remember')) ? true : false;

			Config::set('auth.model', 'Jobseeker');
			$auth = Auth::jobseeker()->attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'active' => 1
			), $remember);

			if($auth) {
				// Redirect to the intended page
				return View::make('jobseeker.home');
			} else {
				return Redirect::route('jobseeker-sign-in')
			   ->with('global', 'Email/password wrong, or account not activated.');
			}
		}

		return Redirect::route('jobseeker-home')
			   ->with('global', 'There was a problem signing in you.');
	}

	public function getSignOut() {
		Auth::jobseeker()->logout();
		return Redirect::route('jobseeker-home');
	}

	public function getChangePassword() {
		return View::make('jobseeker.password');
	}
	public function postChangePassword() {
		$validator = Validator::make(Input::all(),
			array(
				'old_password' => 'required',
				'password' => 'required|min:6',
				'password_again' => 'required|same:password'
			)
		);

		if($validator->fails()) {
			return Redirect::route('jobseeker-change-password')
				   ->withErrors($validator);
		} else {
			$jobseeker = Jobseeker::find(Auth::jobseeker()->get()->id);

			$old_password = Input::get('old_password');
			$password = Input::get('password');

			if(Hash::check($old_password, $jobseeker->getAuthPassword())) {
				$jobseeker->password = Hash::make($password);

				if($jobseeker->save()) {
					return Redirect::route('home')
						   ->with('global', 'Your password has been changed');
				} else {
					return Redirect::route('jobseeker-change-password')
						   ->with('global', 'Your old password is incorrect');
				}
			}

		} 
		return Redirect::route('jobseeker-change-password')
			   ->with('global', 'Your password could not be changed');
	}
	public function getForgotPassword() {
		return View::make('jobseeker.forgot');
	}
	public function postForgotPassword() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|email'
			)
		);
		if($validator->fails()) {
			return Redirect::route('jobseeker-forgot-password')
					->withErrors($validator)
					->withInput();
		} else {
			$jobseeker = Jobseeker::where('email', '=', Input::get('email'));

			if($jobseeker->count()) {
				$jobseeker = $jobseeker->first();

				// Generate a new code and password
				$code = str_random(60);
				$password = str_random(10);

				$jobseeker->code = $code;
				$jobseeker->password_temp = Hash::make($password);

				if($jobseeker->save()) {
					Mail::send('emails.auth.forgot', array('link' => URL::route('jobseeker-recover', $code), 'jobseekername' => $jobseeker->jobseekername, 'password' =>$password), function($message) use ($jobseeker) {
					$message->to($jobseeker->email, $jobseeker->jobseekername)->subject('Your new password');
				});
					return Redirect::route('jobseeker-showprofile')
						   ->with('global', 'We have sent a new password by email.');
				}
			}
		}

		return Redirect::route('jobseeker-forgot-password')
				->with('global', 'Could not request new password');
	}

	public function getRecover($code) {
		$jobseeker = Jobseeker::where('code', '=', $code)
				->where('password_temp', '!=', '');

		if($jobseeker->count()) {
			$jobseeker = $jobseeker->first();

			$jobseeker->password = $jobseeker->password_temp;
			$jobseeker->password_temp = '';
			$jobseeker->code = '';

			if($jobseeker->save()) {
				return Redirect::route('jobseeker-home')
						->with('global', 'Your account has been recovered and you can sign in with your new password.');						
			}
		}

		return Redirect::route('home')
				->with('global', 'Could not recover your account');

	}
}