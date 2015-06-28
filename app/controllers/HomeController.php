<?php

class HomeController extends BaseController {

	public function home()
	{
		// Mail::send('emails.auth.test', array('name'=>'Sajib'), function($message){
		//	$message->to('sajibcste@gmail.com', 'SajibNstu')->subject('Test email');
		// });
		$categories = JobCategory::all();
		//return View::make('layout.home')->with('categories', $categories);
		return View::make('home.home')->with('categories', $categories);
	}

	public function getCategoriesJobs($id)
	{
		$catjobs = JobDetail::where('jobcategory_id', '=', $id)->where('approved', '=', 1)->get();

		return View::make('home.jobs')->with(compact('catjobs'));
	}
	public function getVisitor($id)
	{
		$jobs = JobDetail::where('id', '=', $id)->get();
	//	foreach($jobs as $j)
	//	{
	//		echo $j->employer->empcompany->company_name;
	//	}
		return View::make('home.jobdetails')->with(compact('jobs'));
	}
	public function getApplyJobs($id)
	{
		//$catjobs = JobDetail::where('id', '=', $id)->get();
		$catjobs = JobDetail::find($id);
		$jobs = JobDetail::where('id','=',$id)->with('empcompany')->get();
		return View::make('home.apply')->with('jobs',$jobs)
										->with('catjobs', $catjobs);

	}
	public function postSubmit()
	{

		$input = Input::get('id');
		$jobdetail = JobDetail::find($input);
	 
	
		if((Auth::jobseeker()->get()))
		{
			$user = Auth::jobseeker()->get()->id;
			$salary = Input::get('salary');
		   		$seeker = Jobseeker::find($user);

		   		if ($jobdetail->jobseekers->contains($seeker->id)) {
   					 // echo "You have already submitted your CV. Thanks";
   					 return View::make('home.submission');
   					 //$cart->items()->save($newItem);
				} else {
		   		$jobdetail->jobseekers()->save($seeker, ['salary' => $salary]);
		   		return View::make('home.success');
		   	}
		}

		else {
		$password = Input::get('password');
		$email = Input::get('email');
		$user = Jobseeker::where('email', '=', Input::get('email'))->first();
		if($user && (Hash::check($password, $user->password))){
			$user = Jobseeker::where('email', '=', Input::get('email'))->get();
			$salary = Input::get('salary');
		   foreach($user as $u)
		   {
		   	    $salary = Input::get('salary');
		   		$seeker = Jobseeker::find($u->id);
		   		if ($jobdetail->jobseekers->contains($seeker->id)) {
   					 //echo "You have already submitted your CV. Thanks";
		   			return View::make('home.submission');
   					 //$cart->items()->save($newItem);
				}else {

		   		$jobdetail->jobseekers()->save($seeker, ['salary' => $salary]);
		   		return View::make('home.success');
		   		}
		   }
		} 
		else {
			echo "not match";
		}
	}
	}
	public function getSearch() {
		$keyword = Input::get('keyword');

		return View::make('home.search')
			->with('catjobs', JobDetail::where('job_title', 'LIKE', '%'.$keyword.'%')->get())
			->with('keyword', $keyword);
	}	
	public function getJobListing()
	{
		$jobs = JobDetail::paginate(3);
		return View::make('home.joblisting')->with(compact('jobs'));
	}
	public function getCandidateList()
	{
		$jobseeker = Jobseeker::paginate(1);

		return View::make('home.candidates')->with(compact('jobseeker'));
	}
}
