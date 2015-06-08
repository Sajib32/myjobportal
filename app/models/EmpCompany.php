<?php

class EmpCompany extends \Eloquent {

	protected $table = 'empcompanies';
	
	protected $fillable = ['company_name','company_type', 'contact_person', 'contact_persons_designation','country',
	 'address', 'city', 'mobile', 'email', 'website'];

	public function employer()
	{
		return $this->belongsTo('Employer');
	} 

	public function jobdetails()
	{
    return $this->hasMany('JobDetail','employer_id','employer_id');
	}
}