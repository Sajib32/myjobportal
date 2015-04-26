<?php

class OtherController extends \BaseController {

	public function getOthers()
	{
		$user = Auth::jobseeker()->get();

		$others = Jobseeker::select('others.category_name','others.skill_desc','others.field_of_spec')
				->join('others', 'jobseekers.id', '=', 'others.jobseeker_id')
				->where('jobseekers.id', '=', $user->id)
				->get();
		$languages = Jobseeker::select('languages.title','languages.reading','languages.writting','languages.speaking')
				->join('languages', 'jobseekers.id', '=', 'languages.jobseeker_id')
				->where('jobseekers.id', '=', $user->id)
				->get(array(
					'languages.title',
					'languages.reading',
					'languages.writting',
					'languages.speaking'
					));
		$references = Jobseeker::select('references.name','references.organization','references.designation',
		 		'references.address', 'references.mobile', 'references.email', 'references.relation')
				->join('references', 'jobseekers.id', '=', 'references.jobseeker_id')
				->where('jobseekers.id', '=', $user->id)
				->get();


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
				'field_of_spec' => $input['ctl00$MainBodyContent$categoryAreas'],
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
}