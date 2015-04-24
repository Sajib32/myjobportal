<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('references', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();;
			$table->text('name');
			$table->text('organization');
			$table->text('designation');
			$table->text('address');
			$table->text('mobile');
			$table->text('email');
			$table->text('relation');


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
		Schema::drop('references');
	}

}
