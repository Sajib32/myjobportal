<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOthersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('others', function($table){
			$table->increments('id');
			$table->integer('jobseeker_id')->unsigned()->index();;
			$table->text('category_name');
			$table->text('field_of_spec');
			$table->text('skill_desc');
			$table->text('extra_curri');

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
		Schema::drop('others');
	}

}
