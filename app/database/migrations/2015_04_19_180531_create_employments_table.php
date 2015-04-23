<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employments', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();;
			$table->text('company_name');
			$table->text('company_business');
			$table->text('company_location');
			$table->text('position_held');
			$table->text('department');
			$table->text('responsibilities');
			$table->text('from');
			$table->text('to');
			$table->text('exp_category');
			$table->text('skills');

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
		Schema::drop('employments');
	}

}
