<?php

class AdminsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$admin = new Admin;
		$admin->email = "sajibnstu@gmail.com";
		$admin->password = Hash::make('mypassword');
		$admin->save();
	}
}
