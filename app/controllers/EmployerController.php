<?php

class EmployerController extends \BaseController {

	public function index()
	{
		Mail::send('emails.auth.test', array('name'=>'Sajib'), function($message){
			$message->to('sajibcste@gmail.com', 'SajibNstu')->subject('Test email');
		});
		return View::make('employers.index');
	}
	public function getEmpHome()
	{
		return View::make('employers.employer');
	}
		public function getEmpAccount()
	{
		return View::make('employers.createnew');
	}
	public function postEmpAccount()
	{
		$rules = array (
			'username' => 'required|unique:employers',
			'email' => 'required|email|unique:employers',
			'password' => 'required|min:6'
		);
		$messages = array(
				'required' => 'This field is required'
			);

		$validator = Validator::make(Input::all(), $rules, $messages);


			if($validator->fails()) {
				return Redirect::route('EmpAccount')
				   ->withErrors($validator)
				   ->withInput();
			} else {
			$companyname = Input::get('companyname');
			$contactperson = Input::get('person');
			$contactdesignation = Input::get('designation');
		
			$comtype = Input::get('company_type');
			$user = Input::get('username');
			$email = Input::get('email');
			$address = Input::get('address');
			$country = Input::get('country');
			$city = Input::get('city');
			$mobile = Input::get('contact_mobile');
			$conemail = Input::get('contact_email');
			$website = Input::get('url');
			$password = Input::get('password');

			// Activate code
			$code = str_random(60);

			$employer = Employer::create(array(
				'username' => $user,
				'email' => $email,
				'password' => Hash::make($password),
				'code' => $code,
				'active' => 0
			));
			$company = EmpCompany::create(array(
				'company_name' => $companyname,
				'company_type' => $comtype,
				'contact_person' => $contactperson,
				'contact_persons_designation' => $contactdesignation,
				'address' => $address,
				'country' => $country,
				'city' => $city,
				'mobile' => $mobile,
				'email' => $conemail,
				'website' => $website
			));

			$company->employer()->associate($employer);
			$company->save();

			if($employer) {
				Mail::send('emails.auth.empactivate', array('link' => URL::route('employer-activate', $code), 'username' => $user), function($message) use ($employer) {
					$message->to($employer->email, $employer->username)->subject('Activate your account');
				});

				return Redirect::route('jobseeker-verification')
					 ->with('global','Your account has been created! We have sent you an email to activate your account');
			}
		}
	}

	public function getActivate($code) {
		$employer = Employer::where('code', '=', $code)->where('active', '=', 0)->get();

			if($employer->count()){
				$employer = $employer->first();

			// Update jobseeker to active state
			$employer->active = 1;
			$employer->code = '';

			if($employer->save()) {
				return View::make('jobseeker.validation');
			}
		}	
		return Redirect::route('jobseeker-showprofile')
				->with('global', 'We could not active your account');
	}
	public function getSignIn() {
		return View::make('employers.signin');
	}	
	public function getSignOut() {
		Auth::employer()->logout();
		return Redirect::route('employer-sign-in');
	}
	public function postSignIn() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|email',
				'password' => 'required'
			)
		);

		if($validator->fails()) {
			return Redirect::route('employer-sign-in')
				   ->withErrors($validator)
				   ->withInput();
		} else {

			// Must authenticate with email not username.
			Config::set('auth.model', 'Employer');
			$auth = Auth::employer()->attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'active' => 1
			));

			if($auth) {
				// Redirect to the intended page
				// return Redirect::route('jobseeker-step_02_view');
				return Redirect::route('EmpHome');	
			} else {
				return Redirect::route('employer-sign-in')
			   			->with('failure', 'Email/password wrong, or account not activated.');
			}

		}

		return Redirect::route('employer-sign-in')
			   ->with('global', 'There was a problem signing in you.');
	}
	public function getAddJobs() {
		return View::make('employers.jobs_add');
	}	
	public function postAddJobs() {
		$user = Auth::employer()->get();
		$input = Input::all();
		$validator = Validator::make($input,
				array(
					'job_title' => 'required',
					'vacancy' => 'required',
					'job_location' => 'required',
					'salary' => 'required',
					'applying_last_date' => 'required',
					'job_responsibility' => 'required',
					'edu_qualification' => 'required',
					'add_requirements' => 'required',
					'experience' => 'required',
					'other_benefits' => 'required',
					'apply_procedure' => 'required',
					'online_submit' => 'required',
					'job_nature' => 'required',
					'approved' => 'required'
					)
			);
		if($validator->fails()){
			return Redirect::route('add_jobs')
					->withErrors($validator)
					->withInput();
		} else {
			$jobdetails = new JobDetail;	
			$jobdetails->job_title = $input['title'];
			$jobdetails->vacancy = $input['vacancy'];
			$jobdetails->job_location = $input['location'];	
			$jobdetails->salary = $input['salary'];
			$jobdetails->applying_last_date = $input['last_date'];
			$jobdetails->job_responsibility = $input['responsibility'];
			$jobdetails->edu_qualification = $input['title'];
			$jobdetails->add_requirements = $input['requirements'];
			$jobdetails->experience = $input['experience'];
			$jobdetails->other_benefits = $input['benefits'];
			$jobdetails->apply_procedure = $input['procedure'];
			$jobdetails->online_submit = $input['apply'];
			$jobdetails->job_nature = $input['nature'];
			$jobdetails->approved = 'no';

		$jobdetails->employer()->associate($user);
		$jobdetails->save();
		if(isset($input['category'])){
			foreach($input['category'] as $catID){
				$jcat = JobCategory::find($catID);
				$jobdetails->jobcategory()->associate($jcat);
				$jobdetails->save();
			}
		}
	}
		return Redirect::route('manage_jobs');
	}
	public function getManage()
	{
		$user = Auth::employer()->get();
		$manage = JobDetail::orderBy('id', 'desc')->where('jobdetails.employer_id', '=', $user->id)->paginate(10);

		return View::make('employers.manage_jobs_post')->with('manage', $manage);
	}
	public function getJobEdit($id)
	{
		$jobedit = JobDetail::find($id);
		//$cat = JobCategory::where('id', '=', $jobedit->jobcategory_id)->get();
		$all_categories = JobCategory::lists('name','id');
		return View::make('employers.edit_single_jobs')->with('jobedit', $jobedit)
													->with('all_categories', $all_categories);
	}
	public function getPreview($id)
	{
		$job = JobDetail::find($id);
		$cat = JobCategory::where('jobcategories.id', '=', $job->jobcategory_id)->get();
		
		return View::make('employers.preview')->with('job', $job)
													->with('cat', $cat);
	}
	public function getVisitor($id)
	{
		$user = Auth::employer()->get();
		$job = JobDetail::find($id);
	
		// $str1 = explode(".",$str);
		// $lines = preg_split('/\r\n/', $job);

		 // for ($start=0; $start < count($lines); $start++) {
		// echo "<li>";
		// echo $lines[$start];
		//  echo "</li>";
		// }
				$jobdetails = JobDetail::select('jobdetails.id', 'jobdetails.edu_qualification')
						->where('jobdetails.id', '=', $id)
						->get();

		 return View::make('employers.visitor-view')->with('jobdetails', $jobdetails);
		 // echo $job;
			// return View::make('employers.test-view')->with('jobdetails', $jobdetails);
	}
	public function postJobEdit()
	{
		$user = Auth::employer()->get();
		$employer = Employer::find($user->id);
		$jobdetails = JobDetail::findOrFail(Input::get('id'));
		$input = Input::all();
		// $task->level_of_education = Input::get('ctl00$MainBodyContent$level_educationText');
		// $task->save();
		// return Redirect::route('jobseeker-showStepTwo');	
			$jobdetails->job_title = $input['title'];
			$jobdetails->vacancy = $input['vacancy'];
			$jobdetails->job_location = $input['location'];	
			$jobdetails->salary = $input['salary'];
			$jobdetails->applying_last_date = $input['last_date'];
			$jobdetails->job_responsibility = $input['responsibility'];
			$jobdetails->edu_qualification = $input['title'];
			$jobdetails->add_requirements = $input['requirements'];
			$jobdetails->experience = $input['experience'];
			$jobdetails->other_benefits = $input['benefits'];
			$jobdetails->apply_procedure = $input['procedure'];
			$jobdetails->job_nature = $input['nature'];
			$jobdetails->online_submit = $input['apply'];
			$jobdetails->employer()->associate($employer);
			$jobdetails->save();

		if(isset($input['category'])){
			foreach($input['category'] as $catID){
				$jcat = JobCategory::find($catID);
				$jobdetails->jobcategory()->associate($jcat);
				$jobdetails->save();
			}
		}
		
		return Redirect::route('manage_jobs');
	}
	public function getGly()
	{
		return View::make('employers.glyphiValidate');
	}
	public function getDelete($id)
	{
		$job = JobDetail::find($id);
		$job->delete();

		return Redirect::route('manage_jobs');
	}
	public function getManageEdit($id)
	{
		$job = JobDetail::find($id);
		$job->delete();

		return Redirect::route('manage_jobs');
	}
	public function getApplicantsList()
	{
		$user = Auth::employer()->get();
		$employer = Employer::find($user->id);
		$jobdetails = JobDetail::where('employer_id','=',$user->id)->get();
		//$jobdetails = JobDetail::find(3);
		return View::make('employers.applicants_list')->with(compact('jobdetails'));
		//foreach($jobdetails as $j) {
		//	echo $j->job_title;
		//	foreach($j->jobseekers as $job) {
		//		echo $job;
		//	}
		//}
		//$applicant = JobDetail::with('employer')->get();
		//foreach($applicant as $a){
			//echo $a->id;
			//foreach($a->jobseekers as $j){
			//	echo $j->fullname;
			//}
		//}
		//return View::make()
	}
	public function getApplicantsShow($id)
	{
		$jobdetails = JobDetail::find($id);
		return View::make('employers.applicants_list_show')->with(compact('jobdetails'));
	}

	public function getApplicantsShowView($id)
	{
		$jobseeker = Jobseeker::find($id);
		$qualification = Qualification::where('jobseeker_id', $jobseeker)->get();
		$proqua = Proqualification::where('jobseeker_id', $jobseeker)->get();
		$training = Training::where('jobseeker_id', $jobseeker)->get();
		$employment = Employment::where('jobseeker_id', $jobseeker)->get();
		$spec = Other::where('jobseeker_id', $jobseeker)->get();
		$language = Language::where('jobseeker_id', $jobseeker)->get();
		$reference = Reference::where('jobseeker_id', $jobseeker)->get();

		return View::make('jobseeker.ViewProfile')->with('jobseeker', $jobseeker)
													->with('qualification', $qualification)
													->with('proqua', $proqua)
													->with('training', $training)
													->with('employment', $employment)
													->with('spec', $spec)
													->with('language', $language)
													->with('reference', $reference);
	}

	public function getChangePassword() {
		return View::make('employers.change_password');
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
			return Redirect::route('change.password')
				   ->withErrors($validator);
		} else {
			$employer = Employer::find(Auth::employer()->get()->id);

			$old_password = Input::get('old_password');
			$password = Input::get('password');

			if(Hash::check($old_password, $employer->getAuthPassword())) {
				$employer->password = Hash::make($password);

				if($employer->save()) {
					return Redirect::route('EmpHome')
						   ->with('global', 'Your password has been changed');
				} else {
					return 'fails';
				}
			}

		} 
		return Redirect::route('change.password')
			   ->with('global', 'Your password could not be changed');
	}

	public function getForgotPassword() {
		return View::make('employers.forgot_password');
	}
	public function postForgotPassword() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|email'
			)
		);
		if($validator->fails()) {
			return Redirect::route('employer-forgot-password')
					->withErrors($validator)
					->withInput();
		} else {
			$employer = Employer::where('email', '=', Input::get('email'));

			if($employer->count()) {
				$employer = $employer->first();

				// Generate a new code and password
				$code = str_random(60);
				$password = str_random(8);

				$employer->code = $code;
				$employer->password_temp = Hash::make($password);

				if($employer->save()) {
					Mail::send('emails.auth.employer_forgot', array('link' => URL::route('employer-recover', $code), 'username' => $employer->username, 'password' =>$password), function($message) use ($employer) {
					$message->to($employer->email, $employer->username)->subject('Your new password');
				});
					return Redirect::route('jobseeker-showprofile')
						   ->with('global', 'We have sent a new password by email.');
				}
			}
		}

		return Redirect::route('employer-forgot-password')
				->with('global', 'Could not request new password');
	}
	public function getRecover($code) {
		$employer = Employer::where('code', '=', $code)
				->where('password_temp', '!=', '');

		if($employer->count()) {
			$employer = $employer->first();

			$employer->password = $employer->password_temp;
			$employer->password_temp = '';
			$employer->code = '';

			if($employer->save()) {
				return Redirect::route('employer-sign-in')
						->with('global', 'Your account has been recovered and you can sign in with your new password.');						
			}
		}

		return Redirect::route('home')
				->with('global', 'Could not recover your account');
	}
}
