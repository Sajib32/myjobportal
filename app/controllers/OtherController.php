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
						'languages.speaking',
					));

		return View::make('jobseeker.others')->with('others', $others)
											 ->with('languages', $languages);
	}
	public function postOthers()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$input = Input::all();

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
	public function postLanguage()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);
		$input = Input::all();

$c = count(Input::get('TitleText'));

$title = Input::get('TitleText');
$reading = Input::get('ReadingText');
$writting = Input::get('langWrittingText');
$speaking = Input::get('SpeakingText');

for($i=0; $i<$c; $i++){ // iterate through each entry and create an array of Language models
   $languages = new Language;
   $languages->TitleText = $title[$i];
   $languages->ReadingText = $reading[$i];
   $languages->langWrittingText = $writting[$i];
   $languages->SpeakingText = $speaking[$i];

   $languages->save();
	}
		
		return var_dump($languages);
	}
}