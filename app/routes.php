<?php
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'	
));
Route::get('/index', array(
	'as' => 'index',
	'uses' => 'EmployerController@index'	
));
Route::get('/gly', array(
	'as' => 'gly',
	'uses' => 'EmployerController@getGly'	
));

Route::get('/jobcategory/{id}', array(
'as' => 'categoryjobs',
'uses' => 'HomeController@getCategoriesJobs'	
));
Route::get('/applyjobs/{id}', array(
	'as' => 'applyjobs',
	'uses' => 'HomeController@getApplyJobs'	
));
Route::post('/submit_job', array(
	'as' => 'submit',
	'uses' => 'HomeController@postSubmit'
));
Route::get('/job_details/{id}', array(
	'as' => 'view',
	'uses' => 'HomeController@getVisitor'	
));
Route::get('/search/jobs', array(
	'as' => 'search',
	'uses' => 'HomeController@getSearch'	
));
Route::get('/joblistings', array(
	'as' => 'job-listing',
	'uses' => 'HomeController@getJobListing'	
));
Route::get('/candidatesList', array(
	'as' => 'candidate',
	'uses' => 'HomeController@getCandidateList'	
));
/* End Zone */



/*
| Authenticated group
*/
Route::group(array('before'=>'auth.jobseeker'), function() {
	
	Route::group(array('before'=>'csrf'), function() {
		/*
		| Change password (POST)
		*/
		Route::post('/jobseeker/change-password', array(
			'as' => 'jobseeker-change-password-post',
			'uses' => 'JobseekerController@postChangePassword'
		));	
		Route::post('/jobseeker/step_02_view', array(
			'as' => 'jobseeker-step_02_view-post',
			'uses' => 'JobseekerController@postStepTwo'
		));
		Route::post('/jobseeker/employment', array(
			'as' => 'jobseeker-employment-post',
			'uses' => 'EmploymentController@postEmployment'
		));
		Route::post('/jobseeker/others', array(
			'as' => 'jobseeker-others-post',
			'uses' => 'OtherController@postOthers'
		));
		Route::post('/jobseeker/edit', array(
			'as' => 'jobseeker-edit-post',
			'uses' => 'JobseekerController@postEdit'
		));
		Route::post('/jobseeker/photo', array(
			'as' => 'jobseeker-photo-post',
			'uses' => 'PhotographController@postPhoto'
		));		
		Route::post('/jobseeker/start', array(
			'as' => 'jobseeker-start-post',
			'uses' => 'JobseekerController@postStart'
		));
		Route::post('/jobseeker/proquaedit', array(
			'as' => 'jobseeker-proquaedit-post',
			'uses' => 'JobseekerController@postProQuaEdit'
		));
		Route::post('/jobseeker/trainedit', array(
			'as' => 'jobseeker-trainedit-post',
			'uses' => 'JobseekerController@postTrainEdit'
		));				
		Route::post('/jobseeker/emp', array(
			'as' => 'employment-edit-post',
			'uses' => 'EmploymentController@postEmpEdit'
		));
		Route::post('/jobseeker/specInfo', array(
			'as' => 'jobseeker-specInfo-edit',
			'uses' => 'OtherController@postSpecInfoEdit'
		));
		Route::post('/jobseeker/RefInfo', array(
			'as' => 'reference-edit-post',
			'uses' => 'OtherController@postRefEdit'
		));	
		Route::post('/jobseeker/LanInfo', array(
			'as' => 'language-edit-post',
			'uses' => 'OtherController@postLanEdit'
		));			
	});


	Route::get('/jobseeker/change-password', array(
		'as' => 'jobseeker-change-password',
		'uses' => 'JobseekerController@getChangePassword'
	));
	Route::get('/jobseeker/sign-out', array(
		'as' => 'jobseeker-sign-out',
		'uses' => 'JobseekerController@getSignOut'
	));


	Route::get('/jobseeker/step_02_view', array(
		'as' => 'jobseeker-showStepTwo',
		'uses' => 'JobseekerController@showStepTwo'
	));

	Route::get('/jobseeker/employment', array(
		'as' => 'jobseeker-employment',
		'uses' => 'EmploymentController@getEmployment'
	));
	Route::get('/jobseeker/others', array(
		'as' => 'jobseeker-others',
		'uses' => 'OtherController@getOthers'
	));
	Route::get('/jobseeker/edit/{id}', array(
		'as' => 'jobseeker-edit',
		'uses' => 'JobseekerController@getEdit'
	));
	Route::get('/jobseeker/photo', array(
		'as' => 'jobseeker-photo',
		'uses' => 'PhotographController@getPhoto'
	));
	
	Route::get('/jobseeker/start', array(
		'as' => 'jobseeker-start',
		'uses' => 'JobseekerController@getStart'
	));
	Route::get('/jobseeker/proquaedit/{id}', array(
		'as' => 'jobseeker-proquaedit',
		'uses' => 'JobseekerController@getProQuaEdit'
	));
	Route::get('/jobseeker/trainedit/{id}', array(
		'as' => 'jobseeker-trainedit',
		'uses' => 'JobseekerController@getTrainEdit'
	));
	Route::get('/jobseeker/delete/{qualification}', array(
		'as' => 'jobseeker-delete',
		'uses' => 'JobseekerController@getAcademy'
	));
	Route::get('/jobseeker/del/{proqua}', array(
		'as' => 'jobseeker-delete-proq',
		'uses' => 'JobseekerController@getProquaDel'
	));
	Route::get('/jobseeker/des/{train}', array(
		'as' => 'jobseeker-delete-train',
		'uses' => 'JobseekerController@getTrainDel'
	));	
	Route::get('/jobseeker/emp/{id}', array(
		'as' => 'employment-edit',
		'uses' => 'EmploymentController@getEmpEdit'
	));
	Route::get('/jobseeker/emp/del/{id}', array(
		'as' => 'employment-del',
		'uses' => 'EmploymentController@getEmpDel'
	));	
	Route::get('/jobseeker/specInfo/{id}', array(
		'as' => 'jobseeker-specInfo',
		'uses' => 'OtherController@getSpecInfoEdit'
	));	
	Route::get('/jobseeker/specInfo/del/{id}', array(
		'as' => 'jobseeker-specInfo-del',
		'uses' => 'OtherController@getSpecInfoDel'
	));	
	Route::get('/jobseeker/RefInfo/{id}', array(
		'as' => 'reference-edit',
		'uses' => 'OtherController@getRefEdit'
	));
	Route::get('/jobseeker/RefInfo/del/{id}', array(
		'as' => 'reference-del',
		'uses' => 'OtherController@getRefDel'
	));		
	Route::get('/jobseeker/LanInfo/{id}', array(
		'as' => 'language-edit',
		'uses' => 'OtherController@getLanEdit'
	));		
	Route::get('/jobseeker/Photo/{id}', array(
		'as' => 'photo-delete',
		'uses' => 'PhotographController@getPhotoDel'
	));		
	Route::get('/jobseeker/ViewProfile', array(
		'as' => 'jobseeker-profile',
		'uses' => 'JobseekerController@getViewProfile'
	));			
});

/*
| Unauthenticated group
*/
Route::group(array('before'=>'guest.jobseeker'), function() {
	/*
	| CSRF Protection group
	*/
	Route::group(array('before'=>'csrf'), function() {
		/*
		| Create jobseeker account (POST)
		*/
		Route::post('/jobseeker/create', array(
			'as' => 'jobseeker-create-post',
			'uses' => 'JobseekerController@postCreate'
		));
		Route::post('/jobseeker/sign-in', array(
			'as' => 'jobseeker-sign-in-post',
			'uses' => 'JobseekerController@postSignIn'
		));

		/*
		| Forgot password (GET)
		*/
		Route::post('/jobseeker/forgot-password', array(
			'as' => 'jobseeker-forgot-password-post',
			'uses' => 'JobseekerController@postForgotPassword'
		));
		Route::post('/jobseeker/sign-in', array(
			'as' => 'jobseeker-sign-in-post',
			'uses' => 'JobseekerController@postSignIn'
		));
		Route::post('/jobseeker/resume', array(
			'as' => 'jobseeker-resume-post',
			'uses' => 'JobseekerController@postResume'
		));
	});
	Route::get('/jobseeker/home', array(
		'as' => 'jobseeker-home',
		'uses' => 'JobseekerController@home'
	));
	/*
	| Forgot password (GET)
	*/
	Route::get('/jobseeker/forgot-password', array(
		'as' => 'jobseeker-forgot-password',
		'uses' => 'JobseekerController@getForgotPassword'
	));

	Route::get('/jobseeker/recover/{code}', array(
		'as' => 'jobseeker-recover',
		'uses' => 'JobseekerController@getRecover'
	));
	/*
	| Create jobseeker account sign in (GET)
	*/
	Route::get('/jobseeker/sign-in', array(
		'as' => 'jobseeker-sign-in',
		'uses' => 'JobseekerController@getSignIn'
	));
	/*
	| Create jobseeker account (GET)
	*/
	Route::get('/jobseeker/create', array(
		'as' => 'jobseeker-create',
		'uses' => 'JobseekerController@getCreate'
	));
	Route::get('/jobseeker/activate/{code}', array(
		'as' => 'jobseeker-activate',
		'uses' => 'JobseekerController@getActivate'
	));
	Route::get('/jobseeker/profile', array(
		'as' => 'jobseeker-showprofile',
		'uses' => 'JobseekerController@getProfile'
	));
	Route::get('/jobseeker/contact', array(
		'as' => 'jobseeker-contact',
		'uses' => 'JobseekerController@getContact'
	));
	Route::get('/jobseeker/verification', array(
		'as' => 'jobseeker-verification',
		'uses' => 'JobseekerController@getVerification'
	));
	Route::get('/jobseeker/resume', array(
		'as' => 'jobseeker-resume',
		'uses' => 'JobseekerController@getResume'
	));

});






/*
| Employer Authenticated group
*/
Route::group(array('before'=>'auth.employer'), function() {
	
	Route::group(array('before'=>'csrf'), function() {

	Route::post('/manage_jobs', array(
		'as' => 'add_jobs-post',
		'uses' => 'EmployerController@postAddJobs'	
	));
	Route::post('/edit_job', array(
		'as' => 'edit-job-post',
		'uses' => 'EmployerController@postJobEdit'	
	));		
	Route::post('/change-password', array(
		'as' => 'change-password-post',
		'uses' => 'EmployerController@postChangePassword'
	));
});
	Route::get('/EmpHome', array(
		'as' => 'EmpHome',
		'uses' => 'EmployerController@getEmpHome'	
	));
	Route::get('/add_jobs', array(
		'as' => 'add_jobs',
		'uses' => 'EmployerController@getAddJobs'	
	));	
	Route::get('/manage_jobs', array(
		'as' => 'manage_jobs',
		'uses' => 'EmployerController@getManage'	
	));
	Route::get('/edit_job/{id}', array(
		'as' => 'edit_job',
		'uses' => 'EmployerController@getJobEdit'	
	));	
	Route::get('/jobspreview/{id}', array(
		'as' => 'preview_job',
		'uses' => 'EmployerController@getPreview'	
	));
	Route::get('/jobs-delete/{id}', array(
		'as' => 'jobs-delete',
		'uses' => 'EmployerController@getDelete'	
	));	
	Route::get('/applicants_list', array(
		'as' => 'applicants.list',
		'uses' => 'EmployerController@getApplicantsList'	
	));
	Route::get('/applicants_list_view/{id}', array(
		'as' => 'applicants.show',
		'uses' => 'EmployerController@getApplicantsShow'	
	));		
	Route::get('/ViewProfile/{id}', array(
		'as' => 'show.profile',
		'uses' => 'EmployerController@getApplicantsShowView'
	));
	Route::get('/change-password', array(
		'as' => 'change.password',
		'uses' => 'EmployerController@getChangePassword'
	));	
	Route::get('/sign-out', array(
		'as' => 'sign-out',
		'uses' => 'EmployerController@getSignOut'
	));	
});




/* Employer's Zone */
Route::group(array('before'=>'guest.employer'), function() {

	Route::group(array('before'=>'csrf'), function() {
	
	Route::post('/NewAccount', array(
		'as' => 'EmpAccount-post',
		'uses' => 'EmployerController@postEmpAccount'	
	));
	Route::post('/employer/sign-in', array(
		'as' => 'employer-sign-in-post',
		'uses' => 'EmployerController@postSignIn'
	));
	Route::post('/forgot-password', array(
		'as' => 'employer-forgot-password-post',
		'uses' => 'EmployerController@postForgotPassword'
	));	
});	

	Route::get('/NewAccount', array(
		'as' => 'EmpAccount',
		'uses' => 'EmployerController@getEmpAccount'	
	));
	Route::get('/employer/activate/{code}', array(
		'as' => 'employer-activate',
		'uses' => 'EmployerController@getActivate'
	));
	Route::get('/employer/sign-in', array(
		'as' => 'employer-sign-in',
		'uses' => 'EmployerController@getSignIn'
	));
	Route::get('/forgot-password', array(
		'as' => 'employer-forgot-password',
		'uses' => 'EmployerController@getForgotPassword'
	));
	Route::get('/employer/recover/{code}', array(
		'as' => 'employer-recover',
		'uses' => 'EmployerController@getRecover'
	));
});





/* Admin Section */

Route::group(array('before'=>'guest.admin'), function() {
	Route::group(array('before'=>'csrf'), function() {
	
		Route::post('/admin/dash', array(
			'as' => 'admin-dash-board',
			'uses' => 'AdminController@postLog'
		));
	});

	Route::get('/admin', array(
		'as' => 'admin',
		'uses' => 'AdminController@getLog'
	));

});



Route::group(array('before'=>'auth.admin'), function() {
	
	Route::group(array('before'=>'csrf'), function() {
	
	Route::post('/admin/jobsupdate/{id}', array(
		'as' => 'jobdetails.update',
		'uses' => 'AdminController@updateJobs'	
	));	
	Route::post('/admin/newcategory', array(
		'as' => 'category.save',
		'uses' => 'AdminController@postJobCatNew'	
	));	
	Route::post('/admin/newtype', array(
		'as' => 'type.save',
		'uses' => 'AdminController@postComNew'	
	));	
	Route::post('/admin/catEdit/{id}', array(
		'as' => 'category.update',
		'uses' => 'AdminController@updateJobCatEdit'	
	));
	Route::post('/admin/comTypeEdit/{id}', array(
		'as' => 'comtype.update',
		'uses' => 'AdminController@updateComTypeEdit'	
	));	
});
	Route::get('/admin/dash-board', array(
		'as' => 'admin-dash',
		'uses' => 'AdminController@getDash'	
	));
	Route::get('/admin/jobslist', array(
		'as' => 'jobs.new',
		'uses' => 'AdminController@getJobsList'	
	));
	Route::get('/admin/emplists', array(
		'as' => 'emp.list',
		'uses' => 'AdminController@getEmpLists'	
	));
	Route::get('/admin/seekerlists', array(
		'as' => 'seekers.list',
		'uses' => 'AdminController@getSeekerLists'	
	));		
	Route::get('/admin/seekerDelete/{id}', array(
		'as' => 'seeker.delete',
		'uses' => 'AdminController@getSeekerDel'	
	));			
	Route::get('/admin/jobdelete/{id}', array(
		'as' => 'jobdetails.delete',
		'uses' => 'AdminController@getJobDel'	
	));	
	Route::get('/admin/employerLists', array(
		'as' => 'emp.list',
		'uses' => 'AdminController@getEmpLists'	
	));	
	Route::get('/admin/empDelete/{id}', array(
		'as' => 'emp.delete',
		'uses' => 'AdminController@getEmpDel'	
	));			
	Route::get('/admin/jobcatlist', array(
		'as' => 'jobcat.list',
		'uses' => 'AdminController@getJobCatList'	
	));
	Route::get('/admin/catDelete/{id}', array(
		'as' => 'jobcat.delete',
		'uses' => 'AdminController@getJobCatDel'	
	));	
	Route::get('/admin/comtypes', array(
		'as' => 'comtypes.list',
		'uses' => 'AdminController@getComType'	
	));
	Route::get('/admin/typeDelete/{id}', array(
		'as' => 'comtypes.delete',
		'uses' => 'AdminController@getComTypeDel'	
	));	
	Route::get('/admin/newcategory', array(
		'as' => 'new.cat',
		'uses' => 'AdminController@getJobCatNew'	
	));
	Route::get('/admin/newtype', array(
		'as' => 'new.com',
		'uses' => 'AdminController@getComNew'	
	));		
	Route::get('/admin/catEdit/{id}', array(
		'as' => 'category.edit',
		'uses' => 'AdminController@getJobCatEdit'	
	));	
	Route::get('/admin/comTypeEdit/{id}', array(
		'as' => 'comtypes.edit',
		'uses' => 'AdminController@getComTypeEdit'	
	));		
});
