<?php
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'	
));

Route::get('/index', array(
	'as' => 'index',
	'uses' => 'EmployerController@index'	
));
/*
| Authenticated group
*/
Route::group(array('before'=>'auth'), function() {
	
	Route::group(array('before'=>'csrf'), function() {
		/*
		| Change password (POST)
		*/
		Route::post('/jobseeker/change-password', array(
			'as' => 'jobseeker-change-password-post',
			'uses' => 'JobseekerController@postChangePassword'
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
		Route::post('jobseeker/sign-in', array(
		'as' => 'jobseeker-sign-in-post',
		'uses' => 'JobseekerController@postSignIn'
		));
		/*
		| Forgot password (GET)
		*/
		Route::post('jobseeker/forgot-password', array(
			'as' => 'jobseeker-forgot-password-post',
			'uses' => 'JobseekerController@postForgotPassword'
		));
	});
	Route::get('/jobseeker/home', array(
		'as' => 'jobseeker-home',
		'uses' => 'JobseekerController@home'
	));
	/*
	| Forgot password (GET)
	*/
	Route::get('jobseeker/forgot-password', array(
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
	Route::get('jobseeker/sign-in', array(
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

});