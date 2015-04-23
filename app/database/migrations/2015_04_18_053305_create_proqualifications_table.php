<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProqualificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proqualifications', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();;
			$table->text('certification');
			$table->text('institute');
			$table->text('location');
			$table->text('from');
			$table->text('to');
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
		Schema::drop('proqualifications');
	}

}
