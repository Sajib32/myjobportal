<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainings', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();;
			$table->text('title');
			$table->text('topics');
			$table->text('institute');
			$table->text('location');
			$table->text('country');
			$table->text('year');
			$table->text('duration');

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
		Schema::drop('trainings');
	}

}
