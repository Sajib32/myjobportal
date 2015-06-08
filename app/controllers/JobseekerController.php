<?php

class JobseekerController extends \BaseController {

	public function home() {
		return View::make('layout.jobseekmain');
	}
	public function getResume() {
		return View::make('jobseeker.resume');
	}
	public function getViewProfile()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$qualification = Qualification::where('jobseeker_id', $user->id)->get();
		$proqua = Proqualification::where('jobseeker_id', $user->id)->get();
		$training = Training::where('jobseeker_id', $user->id)->get();
		$employment = Employment::where('jobseeker_id', $user->id)->get();
		$spec = Other::where('jobseeker_id', $user->id)->get();
		$language = Language::where('jobseeker_id', $user->id)->get();
		$reference = Reference::where('jobseeker_id', $user->id)->get();

		return View::make('jobseeker.ViewProfile')->with('jobseeker', $jobseeker)
													->with('qualification', $qualification)
													->with('proqua', $proqua)
													->with('training', $training)
													->with('employment', $employment)
													->with('spec', $spec)
													->with('language', $language)
													->with('reference', $reference);
	}
	public function postResume() {

		$rules = array (
			'txtName' => 'required',
			'txtFName' => 'required',
			'txtMName' => 'required'
		);
		$messages = array(
				'required' => 'This field is required'
			);

		$validator = Validator::make(Input::all(), $rules, $messages);


			if($validator->fails()) {
				return 'fails';


			} else {
				$fullname = Input::get('txtName');
			$mothersname = Input::get('txtFName');
			$fathersname = Input::get('txtMName');
			
			$gender = Input::get('cboGender');
			$marital = Input::get('cboMStatus');
			$religion = Input::get('txtReligion');
 			$dateofbirth = Input::get('cboGender');
 			$nationalid = Input::get('txtNationalId');
			$email = Input::get('txtEmail1');
			$password = Input::get('txtPassword');

			// Activate code
			$code = str_random(60);

			$jobseeker = Jobseeker::create(array(
				'fullname' => $fullname,
				'mothersname' => $mothersname,
				'fathersname' => $fathersname,
				'gender' => $gender,
				'marital' => $marital,
				'religion' => $religion,
				'dateofbirth' => $dateofbirth,
				'nationalid' => $nationalid,
				'email' => $email,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0
			));
			
			

			if($jobseeker) {
				Mail::send('emails.auth.activate', array('link' => URL::route('jobseeker-activate', $code), 'fullname' => $fullname), function($message) use ($jobseeker) {
					$message->to($jobseeker->email, $jobseeker->fullname)->subject('Activate your account');
				});

				return Redirect::route('jobseeker-verification')
					 ->with('global','Your account has been created! We have sent you an email to activate your account');
			}
		}
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
		$jobseeker = Jobseeker::where('code', '=', $code)->where('active', '=', 0)->get();

			if($jobseeker->count()){
				$jobseeker = $jobseeker->first();

			// Update jobseeker to active state
			$jobseeker->active = 1;
			$jobseeker->code = '';

			if($jobseeker->save()) {
				return View::make('jobseeker.validation');
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

				// return Redirect::route('jobseeker-step_02_view');
				return Redirect::route('jobseeker-start');
			} else {
				return Redirect::route('jobseeker-sign-in')
			   			->with('global', 'Email/password wrong, or account not activated.');
			}
		}

		return Redirect::route('jobseeker-sign-in')
			   ->with('global', 'There was a problem signing in you.');
	}

	public function getSignOut() {
		Auth::jobseeker()->logout();
		return Redirect::route('jobseeker-sign-in');
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
					Mail::send('emails.auth.forgot', array('link' => URL::route('jobseeker-recover', $code), 'fullname' => $jobseeker->fullname, 'password' =>$password), function($message) use ($jobseeker) {
					$message->to($jobseeker->email, $jobseeker->fullname)->subject('Your new password');
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

	public function getContact() {
		return View::make('jobseeker.contact');
	}
	public function getVerification() {
		return View::make('jobseeker.resumes-verifyaccount');
	}
	public function getStepTwo() 
	{			
		
		return View::make('jobseeker.test');	
	}
	public function postStepTwo() 
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$input = Input::all();

		if(isset($_POST['ctl00$MainBodyContent$save_education_info'])){
		$qualification = new Qualification;
			
		// $qualification->examlevel_id = Input::get('ctl00$MainBodyContent$level_educationText');
		$qualification->exam_title = Input::get('ctl00$MainBodyContent$exam_titleText');
		$qualification->major = Input::get('ctl00$MainBodyContent$concentration_groupText');
		
		// $institute = Input::get('ctl00$MainBodyContent$institute_nameText');
		/*
		if(isset($input['institute_name'])){
			foreach($input['institute_name'] as $insID){
				$univID = University::find($insID);
				if($univID->id == 3 || $univID->id == 4){
					$qualification->institute_name = Input::get('ctl00$MainBodyContent$insOtherText');
				} else {
					 $qualification->institute_name = $univID->name;
			}
		}
	}
	*/
		$qualification->institute_name = Input::get('ctl00$MainBodyContent$insOtherText');
		$result = Input::get('ctl00$MainBodyContent$resultText');
		if($result == '1' || $result == '2' || $result == '3')
		{
			$qualification->result = Input::get('ctl00$MainBodyContent$resultText');
			$qualification->marks = Input::get('ctl00$MainBodyContent$marksText');
		} else {
			$qualification->result = Input::get('ctl00$MainBodyContent$cgpaText');
			$qualification->marks = Input::get('ctl00$MainBodyContent$scaleText');
		}
		$qualification->year_of_passing = Input::get('year_of_passing');
		$qualification->duration = Input::get('ctl00$MainBodyContent$durationText');
		$qualification->achievement = Input::get('ctl00$MainBodyContent$achievementText');

		$qualification->jobseeker()->associate($jobseeker);
		$qualification->save();
			if(isset($input['examlevel'])){
			foreach($input['examlevel'] as $examID){
				$exam = ExamLevel::find($examID);
				$qualification->examlevel()->associate($exam);
				$qualification->save();
			}
		}


		return Redirect::route('jobseeker-showStepTwo');
	}
	if(isset($_POST['ctl00$MainBodyContent$SaveProfessionalInfo'])){
		$proqualification = Proqualification::create(array
			(
				'certification' => $input['ctl00$MainBodyContent$certificateText'],
				'institute' => $input['ctl00$MainBodyContent$instituteText'],
				'location' => $input['ctl00$MainBodyContent$locationText'],
				'from' => $input['ctl00$MainBodyContent$fromDateText'],
				'to' => $input['ctl00$MainBodyContent$toDateText'],
			)
		);
		$proqualification->jobseeker()->associate($jobseeker);
		$proqualification->save();	
		
		return Redirect::route('jobseeker-showStepTwo');

	}

	if(isset($_POST['ctl00$MainBodyContent$saveTrainingInfo'])){
		$training = Training::create(array
			(
				'title' => $input['ctl00$MainBodyContent$training_titleText'],
				'topics' => $input['ctl00$MainBodyContent$topicsText'],
				'institute' => $input['ctl00$MainBodyContent$instituteTrainingText'],
				'location' => $input['ctl00$MainBodyContent$locationTrainingText'],
				'country' => $input['ctl00$MainBodyContent$countryTrainingText'],
				'year' => $input['ctl00$MainBodyContent$yearTrainingText'],
				'duration' => $input['ctl00$MainBodyContent$durationTrainingText'],
			)
		);

		$training->jobseeker()->associate($jobseeker);
		$training->save();	

		return Redirect::route('jobseeker-showStepTwo');
		}	
	}
	public function showStepTwo()
	{
		$user = Auth::jobseeker()->get();
		$qualification = Qualification::with('jobseeker')->where('jobseeker_id', $user->id)->get();
	
		/*$qualification = Jobseeker::select('qualifications.id', 'qualifications.jobseeker_id','qualifications.level_of_education',
		 'qualifications.institute_name', 'qualifications.insOther', 'qualifications.result','qualifications.marks', 'qualifications.year_of_passing',
		 'qualifications.duration', 'qualifications.achievement', 'qualifications.major', 
		 'qualifications.exam_title')
						->join('qualifications', 'jobseekers.id', '=', 'qualifications.jobseeker_id')
						->where('jobseekers.id', '=', $user->id)
						->get();
						*/
		// $proqualification = Jobseeker::select('proqualifications.id', 'proqualifications.jobseeker_id', 'proqualifications.certification')
				//->join('proqualifications', 'jobseekers.id', '=', 'proqualifications.jobseeker_id')
				//->where('jobseekers.id', '=', $user->id)
				//->get();
		$proqualification = Proqualification::with('jobseeker')->where('jobseeker_id', $user->id)->get();
		$training = Training::with('jobseeker')->where('jobseeker_id', $user->id)->get();
		//$training = Jobseeker::select('trainings.id', 'trainings.jobseeker_id', 'trainings.institute')
				//->join('trainings', 'jobseekers.id', '=', 'trainings.jobseeker_id')
				//->where('jobseekers.id', '=', $user->id)
				//->get();

		return View::make('jobseeker.test')->with('qualification', $qualification)
										   ->with('proqualification', $proqualification)
										   ->with('training', $training);
	}
	public function getEdit($id)
	{
		$qualification = Qualification::find($id);
		$exam = ExamLevel::where('id',$qualification->examlevel_id)->get();
		
		return View::make('jobseeker.edit-qualification')
				 ->with('qualification', $qualification)
				->with('insname', $exam);
	}
	public function postEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$task = Qualification::find(Input::get('id'));
		$input = Input::all();
		
		$task->exam_title = $input['ctl00$MainBodyContent$exam_titleText'];
		$task->major = $input['ctl00$MainBodyContent$concentration_groupText'];
		$task->institute_name = $input['ctl00$MainBodyContent$insOtherText'];
		$result = Input::get('ctl00$MainBodyContent$resultText');
		if($result == '1' || $result == '2' || $result == '3')
		{
			$task->result = Input::get('ctl00$MainBodyContent$resultText');
			$task->marks = Input::get('ctl00$MainBodyContent$marksText');
		} else {
			$task->result = Input::get('ctl00$MainBodyContent$cgpaText');
			$task->marks = Input::get('ctl00$MainBodyContent$scaleText');
		}
		$task->year_of_passing = $input['ctl00$MainBodyContent$year_passingText'];
		$task->duration = $input['ctl00$MainBodyContent$durationText'];
		$task->achievement = $input['ctl00$MainBodyContent$achievementText'];
		$task->jobseeker()->associate($jobseeker);
		$task->save();

		if(isset($input['examlevel'])) {
			foreach($input['examlevel'] as $examId) {
				$exam = ExamLevel::find($examId);
				$task->examlevel()->associate($exam);
				$task->save();
			}
		}
		// $task->level_of_education = Input::get('ctl00$MainBodyContent$level_educationText');
		// $task->save();
		// return Redirect::route('jobseeker-showStepTwo');

		return Redirect::route('jobseeker-showStepTwo');
	 
	}
	public function getStart()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);

		return View::make('jobseeker.start')->with('jobseeker', $jobseeker);
	}
	public function postStart()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);

		$personal = Jobseeker::find(Input::get('id'));
		$input = Input::all();

		$personal->fullname = $input['ctl00$MainBodyContent$fullnameText'];
		$personal->mothersname = $input['ctl00$MainBodyContent$mothernameText'];
		$personal->fathersname = $input['ctl00$MainBodyContent$fathernameText'];
		$personal->present_address = $input['present'];
		$personal->permanent_address = $input['permanent'];
		$personal->gender = $input['ctl00$MainBodyContent$genderText'];
		$personal->marital = $input['ctl00$MainBodyContent$maritalText'];
		$personal->religion = $input['ctl00$MainBodyContent$ReligionText'];
		$personal->dateofbirth = $input['ctl00$MainBodyContent$dobText'];
		$personal->nationalid = $input['ctl00$MainBodyContent$nationalText'];
		$personal->email = $input['ctl00$MainBodyContent$emailText'];
		$personal->confirm_email = $input['ctl00$MainBodyContent$confirmEmailText'];
		
		
		$personal->save();

		return Redirect::route('jobseeker-start');

	}
	public function getProQuaEdit($id)
	{
		$proq = Proqualification::find($id);
		return View::make('jobseeker.proquaedit')
				->with('proq', $proq);
	}
	public function postProQuaEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);		
		$proqua = Proqualification::find(Input::get('id'));
		$input = Input::all();
		if(isset($_POST['ctl00$MainBodyContent$ProfessionalQuaEditBtn'])){
		$proqua->certification = $input['ctl00$MainBodyContent$certificateText'];
		$proqua->institute = $input['ctl00$MainBodyContent$instituteText'];
		$proqua->location = $input['ctl00$MainBodyContent$locationText'];
		$proqua->from = $input['ctl00$MainBodyContent$fromDateText'];
		$proqua->to = $input['ctl00$MainBodyContent$toDateText'];
		
		$proqua->jobseeker()->associate($jobseeker);
		$proqua->save();

		return Redirect::route('jobseeker-showStepTwo');
		}
	}	
	public function getTrainEdit($id)
	{
		$train = Training::find($id);
		return View::make('jobseeker.trainedit')
				->with('train', $train);
	}
	public function postTrainEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);		
		$train = Training::find(Input::get('id'));
		$input = Input::all();

		$train->title = $input['ctl00$MainBodyContent$trainraining_titleText'];
		$train->topics = $input['ctl00$MainBodyContent$trainopicsText'];
		$train->institute = $input['ctl00$MainBodyContent$instituteTrainingText'];
		$train->country = $input['ctl00$MainBodyContent$countryTrainingText'];
		$train->year = $input['ctl00$MainBodyContent$locationTrainingText'];
		$train->duration = $input['ctl00$MainBodyContent$yearTrainingText'];
		
		$train->jobseeker()->associate($jobseeker);
		$train->save();

		return Redirect::route('jobseeker-showStepTwo');
	}
	public function getAcademy($id)
	{
		$q = Qualification::find($id);
		$q->delete();

		return Redirect::route('jobseeker-showStepTwo');	
	}
	public function getProquaDel($id)
	{
		$proqua = Proqualification::find($id);
		$proqua->delete();
	
		return Redirect::route('jobseeker-showStepTwo');	
	}
	public function getTrainDel($id)
	{
		$t = Training::find($id);
		$t->delete();
		
		return Redirect::route('jobseeker-showStepTwo');	
	}		
}	
