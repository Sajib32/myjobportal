<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExamlevelIdToQualifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('qualifications', function($table){
			$table->integer('examlevel_id')->after('jobseeker_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('qualifications', function($table){
			$table->drop_column('examlevel_id');
		});
	}

}
