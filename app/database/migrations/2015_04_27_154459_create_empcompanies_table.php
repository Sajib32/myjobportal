<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpcompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empcompanies', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();
			$table->text('company_name');			
			$table->text('contact_person');
			$table->text('contact_persons_designation');
			$table->text('address');
			$table->text('country');
			$table->text('city');
			$table->text('mobile');
			$table->text('email');
			$table->text('website');

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
		Schema::drop('empcompanies');
	}

}
