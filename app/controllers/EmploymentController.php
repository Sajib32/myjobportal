<?php

class EmploymentController extends \BaseController {


	public function getEmployment()
	{
		$user = Auth::jobseeker()->get();

		$employment = Jobseeker::select('employments.company_name')
				->join('employments', 'jobseekers.id', '=', 'employments.jobseeker_id')
				->where('jobseekers.id', '=', $user->id)
				->get();

		return View::make('jobseeker.employment')->with('employment', $employment);
	}
	public function postEmployment()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$input = Input::all();

		$employment = Employment::create(array
			(
				'company_name' => $input['ctl00$MainBodyContent$CompanyNameText'],
				'company_business' => $input['ctl00$MainBodyContent$CompanyBusinessText'],
				'company_location' => $input['ctl00$MainBodyContent$CompanyLocationText'],
				'position_held' => $input['ctl00$MainBodyContent$PositionHeldText'],
				'department' => $input['ctl00$MainBodyContent$DepartmentText'],
				'responsibilities' => $input['ctl00$MainBodyContent$responsibilitiesText'],
				'datefrom' => $input['ctl00$MainBodyContent$fromDateText'],
				'dateto' => $input['ctl00$MainBodyContent$toDateText'],
				'exp_category' => $input['ctl00$MainBodyContent$expCategory'],
				'skills' => $input['ctl00$MainBodyContent$chooseEmpText'],
			)
		);
		$employment->jobseeker()->associate($jobseeker);
		$employment->save();	
		
		return Redirect::route('jobseeker-employment');


	}

}