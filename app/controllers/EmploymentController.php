<?php

class EmploymentController extends \BaseController {


	public function getEmployment()
	{
		$user = Auth::jobseeker()->get();

		//$employment = Jobseeker::select('employments.company_name')
				//->join('employments', 'jobseekers.id', '=', 'employments.jobseeker_id')
				//->where('jobseekers.id', '=', $user->id)
				//->get();
		$employment = Employment::with('jobseeker')->where('jobseeker_id', $user->id)->get();		
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
				'company_location' => $input['ctl00$MainBodyContent$CompanyLocationText'],
				'position_held' => $input['ctl00$MainBodyContent$PositionHeldText'],
				'department' => $input['ctl00$MainBodyContent$DepartmentText'],
				'responsibilities' => $input['ctl00$MainBodyContent$responsibilitiesText'],
				'datefrom' => $input['ctl00$MainBodyContent$fromDateText'],
				'dateto' => $input['ctl00$MainBodyContent$toDateText'],
			)
		);
		$employment->jobseeker()->associate($jobseeker);
		$employment->save();	
		
		return Redirect::route('jobseeker-employment');
	}
	public function getEmpEdit($id)
	{
		$emp = Employment::find($id);
		
		return View::make('jobseeker.employment-edit')
				 ->with('emp', $emp);

	}
	public function postEmpEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$emp = Employment::find(Input::get('id'));
		$input = Input::all();

		$emp->company_name = $input['ctl00$MainBodyContent$CompanyNameText'];
		$emp->company_location = $input['ctl00$MainBodyContent$CompanyLocationText'];
		$emp->position_held = $input['ctl00$MainBodyContent$PositionHeldText'];
		$emp->department = $input['ctl00$MainBodyContent$DepartmentText'];
		$emp->responsibilities = $input['ctl00$MainBodyContent$responsibilitiesText'];
		$emp->datefrom = $input['ctl00$MainBodyContent$fromDateText'];
		
		//$check = $input['ctl00$MainBodyContent$toDateText'];
		//if($check == '1') 
		if (Input::get('ctl00$MainBodyContent$continueText') === '1') 
		{
			$emp->dateto = 'Present';
		}
		else {
			$emp->dateto = $input['ctl00$MainBodyContent$toDateText'];
		}
		$emp->jobseeker()->associate($jobseeker);
		$emp->save();

		return Redirect::route('jobseeker-employment');
	}
	public function getEmpDel($id)
	{
		$emp = Employment::find($id);
		$emp->delete();
		
		return Redirect::route('jobseeker-employment');
	}
}