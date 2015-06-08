<?php

class AdminController extends \BaseController {

	public function getLog() {
		return View::make('admin.login');
	}

	public function postLog() {

		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required',
				'password' => 'required'
			)
		);

		if($validator->fails()) {
			return Redirect::route('admin')
				   ->withErrors($validator)
				   ->withInput();
		} else {


			Config::set('auth.model', 'Admin');
			$auth = Auth::admin()->attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			));

			if($auth) {
				return Redirect::route('admin-dash');
            
        } else {
           return Redirect::back()->withInput()->with('failure', 'username or password is invalid!');
        }
		}
		return Redirect::back()->withInput()->with('failure', 'username or password is invalid!');
	}
	public function getDash()
	{
		return View::make('admin.layout.admin');
	}
	public function getJobsList()
	{
        $jobs = JobDetail::orderBy('id', 'desc')->paginate(10);
        return View::make('admin.jobslist')->with(compact('jobs'));
	}
	public function getEmpLists()
	{
		$emp = Employer::orderBy('id','desc')->paginate(10);
		return View::make('admin.employer')->with(compact('emp'));
		
	}
	public function getSeekerLists()
	{
		$seeker = Jobseeker::orderBy('id','desc')->paginate(10);
		return View::make('admin.seekers')->with(compact('seeker'));
	}
	public function updateJobs($id)
    {   
    	$jobs = JobDetail::find($id);
        $jobs->approved = Input::get('status');
        $jobs->save();
       
        return Redirect::back()->with('success', 'Jobdetails ' . (($jobs->approved === 'yes') ? 'Approved' : 'Disapproved'));
    }
    public function getJobDel($id)
    {
    	$job = JobDetail::find($id);
    	$job->delete();

    	return Redirect::route('jobs.new');
    }
    public function getEmpDel($id)
    {
    	$emp = Employer::find($id);
    	$emp->delete();

    	return Redirect::route('emp.list');
    }
    public function getSeekerDel($id)
    {
    	$seek = Jobseeker::find($id);
    	$seek->delete();

    	return Redirect::route('seekers.list');
    }
    public function getJobCatList()
    {
    	$jobcat = JobCategory::orderBy('id','desc')->paginate(10);
    	return View::make('admin.jobcatlist')->with(compact('jobcat'));
    }
    public function getJobCatDel($id)
    {
    	$cat = JobCategory::find($id);
    	$cat->delete();

    	return Redirect::route('jobcat.list');
    }    
    public function getComType()
    {
    	$type = CompanyType::orderBy('id','desc')->paginate(10);
    	return View::make('admin.comtypes')->with(compact('type'));
    }
    public function getJobCatNew()
    {
    	return View::make('admin.new');
    }
    public function postJobCatNew()
    {
        $category = [
            'name' => Input::get('name'),
        ];
        $rules = [
            'name' => 'required',
        ];
        $valid = Validator::make($category, $rules);
        if ($valid->passes()) {
            $category = new JobCategory($category);
            $category->save();
            return Redirect::to('admin/jobcatlist')->with('success', 'Category is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    }
    public function getComNew()
    {
    	return View::make('admin.newcomtype');
    }    
    public function postComNew()
    {
        $category = [
            'name' => Input::get('name'),
        ];
        $rules = [
            'name' => 'required',
        ];
        $valid = Validator::make($category, $rules);
        if ($valid->passes()) {
            $category = new CompanyType($category);
            $category->save();
            return Redirect::to('/admin/comtypes')->with('success', 'Category is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    }
    public function getComTypeDel($id)
    {
    	$type = CompanyType::find($id);
    	$type->delete();

    	return Redirect::to('/admin/comtypes');
    }
    public function getJobCatEdit($id)
    {
    	$jobcat = JobCategory::find($id);
    	return View::make('admin.jobcatedit')->with(compact('jobcat'));
    }
    public function updateJobCatEdit($id)
    {
    	$jobcat = JobCategory::find($id);
    	$data = [
            'name' => Input::get('name'),
        ];
        $rules = [
            'name' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes()) {
            $jobcat->name = $data['name'];
            if (count($jobcat->getDirty()) > 0) /* avoiding resubmission of same content */ {
                $jobcat->save();
                return Redirect::route('jobcat.list')->with('success', 'Category is updated!');
            } else
                return Redirect::route('jobcat.list')->with('success', 'Nothing to update!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    } 

    public function getComTypeEdit($id)
    {
    	$comtype = CompanyType::find($id);
    	return View::make('admin.comtypesedit')->with(compact('comtype'));
    }
    public function updateComTypeEdit($id)
    {
    	$comtype = CompanyType::find($id);
    	$data = [
            'name' => Input::get('name'),
        ];
        $rules = [
            'name' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes()) {
            $comtype->name = $data['name'];
            if (count($comtype->getDirty()) > 0) /* avoiding resubmission of same content */ {
                $comtype->save();
                return Redirect::back()->with('success', 'CompanyType is updated!');
            } else
                return Redirect::back()->with('success', 'Nothing to update!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    } 
}
