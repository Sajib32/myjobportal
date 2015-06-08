<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobdetailsTable extends Migration {


	public function up()
	{
		Schema::create('jobdetails', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();
			$table->integer('category_id')->unsigned()->index();
			$table->text('job_title');			
			$table->text('vacancy');
			$table->text('job_location');
			$table->text('salary');
			$table->text('applying_last_date');
			$table->text('job_responsibility');
			$table->text('edu_qualification');
			$table->text('experience');
			$table->text('add_requirements');
			$table->text('other_benefits');
			$table->text('apply_procedure');

			$table->timestamps();
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobdetails');
	}

}
