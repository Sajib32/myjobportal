<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobseekersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobseekers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('username');
			$table->text('email');
			$table->text('password');
			$table->text('password_temp');
			$table->text('code');
			$table->text('remember_token');
			$table->integer('active');
			
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
		Schema::drop('jobseekers');
	}

}
