<?php

class JobDetail extends \Eloquent {
	protected $fillable = ['job_title','vacancy','job_location','salary','applying_last_date',
	'job_responsibility','edu_qualification','experience','add_requirements','other_benefits',
	'apply_procedure', 'online_submit', 'approved'];

	protected $table = 'jobdetails';

	public function employer()
	{
		return $this->belongsTo('Employer');
	}

	public function jobcategory()
	{
		return $this->belongsTo('JobCategory');
	}
/*------*/
	public function empcompany()
    {
        return $this->belongsTo('EmpCompany','employer_id','employer_id');
    }
    public function jobseekers()
    {
    	return $this->belongsToMany('Jobseeker')->withPivot('salary');
    }
	public function getApprovedAttribute($approved)
    {
        return (intval($approved) == 1) ? 'yes' : 'no';
    }
    
    public function setApprovedAttribute($approved)
    {
        $this->attributes['approved'] = ($approved === 'yes') ? 1 : 0;
    }
}