<?php

class OtherController extends \BaseController {

	public function getOthers()
	{
		$user = Auth::jobseeker()->get();

		$others = Other::with('jobseeker')->where('jobseeker_id', $user->id)->get();
		//$others = Jobseeker::select('others.category_name','others.skill_desc','others.field_of_spec')
				//->join('others', 'jobseekers.id', '=', 'others.jobseeker_id')
				//->where('jobseekers.id', '=', $user->id)
				//->get();
		$languages = Language::with('jobseeker')->where('jobseeker_id', $user->id)->get();
				$references = Reference::with('jobseeker')->where('jobseeker_id', $user->id)->get();
		//$references = Jobseeker::select('references.name','references.organization','references.designation',
		 		//'references.address', 'references.mobile', 'references.email', 'references.relation')
				//->join('references', 'jobseekers.id', '=', 'references.jobseeker_id')
				//->where('jobseekers.id', '=', $user->id)
				//->get();


		return View::make('jobseeker.others')->with('others', $others)
											  ->with('languages', $languages)
											  ->with('references', $references);
	}
	

	public function postOthers()
	{

		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$input = Input::all();

		if(isset($_POST['ctl00$MainBodyContent$save_specilization_info'])){
		$others = Other::create(array
			(
				'category_name' => $input['ctl00$MainBodyContent$categoryName'],
				'skill_desc' => $input['ctl00$MainBodyContent$SkillDescriptionText'],
				'extra_curri' => $input['ctl00$MainBodyContent$extraCurricularText'],
			)
		);
		$others->jobseeker()->associate($jobseeker);
		$others->save();	
		
		return Redirect::route('jobseeker-others');

	}
	 if(isset($_POST['ctl00$MainBodyContent$saveLanguageInfo'])){
	 	
	 /*	$c = count($input['TitleText']);
 $title = Input::get('TitleText');
 $reading = Input::get('ReadingText');
 $writting = Input::get('langWrittingText');
 $speaking = Input::get('SpeakingText');

  for($i=0; $i<$c; $i++){ // iterate through each entry and create an array of Language models
   if($input['TitleText'][$i]){
   	   $languages = new Language;
   $languages->title = $title[$i];
    $languages->reading = $reading[$i];
    $languages->writting = $writting[$i];
    $languages->speaking = $speaking[$i];

	 }	
   }
   		 $languages->jobseeker()->associate($jobseeker);
		$languages->save();
   
		return Redirect::route('jobseeker-others');

	}

	*/	
	

$count = count($input['TitleText']); // here we will know how many entries have been posted

for($i=0; $i<$count; $i++){
   if($input['TitleText'][$i]){ // iterate through each entry and create an array of inputs
      $lang = new Language;
      $lang->title = $input['TitleText'][$i]; 
      $lang->reading = $input['ReadingText'][$i];
      $lang->writting = $input['langWrittingText'][$i];
      $lang->speaking = $input['SpeakingText'][$i];
   
   }
   $lang->jobseeker()->associate($jobseeker);
		$lang->save();
}

return Redirect::route('jobseeker-others'); // save the array of models at once
}

	if(isset($_POST['ctl00$MainBodyContent$SaveReference_Info'])){
		$references = Reference::create(array
			(
				'name' => $input['ctl00$MainBodyContent$refNameText'],
				'organization' => $input['ctl00$MainBodyContent$refOrganizationText'],
				'designation' => $input['ctl00$MainBodyContent$refDesignationText'],
				'address' => $input['ctl00$MainBodyContent$refAddressText'],
				'mobile' => $input['ctl00$MainBodyContent$refMobileText'],
				'email' => $input['ctl00$MainBodyContent$refEmailText'],
				'relation' => $input['ctl00$MainBodyContent$refRelationText'],
			)
		);
		$references->jobseeker()->associate($jobseeker);
		$references->save();	
		
		return Redirect::route('jobseeker-others');
		}		
	}
	public function getSpecInfoEdit($id)
	{
		$spec = Other::find($id);

		return View::make('jobseeker.SpecInfoEdit')->with('spec', $spec);
	}
	public function postSpecInfoEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$other = Other::find(Input::get('id'));
		$input = Input::all();

		$other->category_name = $input['ctl00$MainBodyContent$categoryName'];
		$other->skill_desc = $input['ctl00$MainBodyContent$SkillDescriptionText'];
		$other->extra_curri = $input['ctl00$MainBodyContent$extraCurricularText'];
		
		$other->jobseeker()->associate($jobseeker);
		$other->save();

		return Redirect::route('jobseeker-others');
	}
	public function getSpecInfoDel($id)
	{
		$other = Other::find($id);
		$other->delete();

		return Redirect::route('jobseeker-others');
	}
	public function getRefEdit($id)
	{
		$ref = Reference::find($id);

		return View::make('jobseeker.RefInfoEdit')->with('ref', $ref);
	}
	public function postRefEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$ref = Reference::find(Input::get('id'));
		$input = Input::all();

		$ref->name = $input['ctl00$MainBodyContent$refNameText'];
		$ref->organization = $input['ctl00$MainBodyContent$refOrganizationText'];
		$ref->designation = $input['ctl00$MainBodyContent$refDesignationText'];
		$ref->address = $input['ctl00$MainBodyContent$refAddressText'];
		$ref->mobile = $input['ctl00$MainBodyContent$refMobileText'];
		$ref->email = $input['ctl00$MainBodyContent$refEmailText'];
		$ref->relation = $input['ctl00$MainBodyContent$refRelationText'];
		
		$ref->jobseeker()->associate($jobseeker);
		$ref->save();

		return Redirect::route('jobseeker-others');
	}
	public function getRefDel($id)
	{
		$ref = Reference::find($id);
		$ref->delete();

		return Redirect::route('jobseeker-others');
	}
	public function getLanEdit($id)
	{
		$lan = language::find($id);

		return View::make('jobseeker.LanInfoEdit')->with('lan', $lan);
	}
	public function postLanEdit()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$lan = Language::find(Input::get('id'));
		$input = Input::all();

		$lan->title = $input['ctl00$MainBodyContent$langTitleText'];
		$lan->reading = $input['ctl00$MainBodyContent$langReadingText'];
		$lan->writting = $input['ctl00$MainBodyContent$langWrittingText'];
		$lan->speaking = $input['ctl00$MainBodyContent$langSpeakingText'];
		
		$lan->jobseeker()->associate($jobseeker);
		$lan->save();

		return Redirect::route('jobseeker-others');
	}
}