<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employers', function($table){
			$table->increments('id');
			$table->text('username');			
			$table->text('email');
			$table->text('password');
			$table->text('password_temp');
			$table->text('code');
			$table->text('active');
			$table->text('remember_token');

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
		Schema::drop('employers');
	}

}
