<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobDetailJobseekerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_detail_jobseeker', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->index();
			$table->integer('job_detail_id')->index();
			$table->integer('salary');
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
		Schema::drop('job_detail_jobseeker');
	}

}
