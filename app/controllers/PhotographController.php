<?php

class PhotographController extends \BaseController {

	public function getPhoto()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);

		$photo = Photograph::where('jobseeker_id', '=', $user->id)->first();
		
		return View::make('jobseeker.fileupload')
        			->with('photo', $photo);
	}
	public function postPhoto()
	{
		$user = Auth::jobseeker()->get();
		$jobseeker = Jobseeker::find($user->id);

		$photo = new Photograph;
		$image = Input::file('image');
		$filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img/products/' . $filename);
        Image::make($image->getRealPath())->resize(468, 249)->save($path);
        $photo->image = 'img/products/'.$filename;
        
        $photo->jobseeker()->associate($jobseeker);
        $photo->save();

        return Redirect::route('jobseeker-photo');
	}
	public function getPhotoDel($id)
	{
		$photo = Photograph::find($id);
		$photo->delete();

		return Redirect::route('jobseeker-photo');
	}
}