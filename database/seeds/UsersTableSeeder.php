<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{

		$dt = new DateTime;

		$users = array(
			array(
				'name'              => 'Luke Danielson',
				'email'             => 'luke.a.danielson@gmail.com',
				'password'          =>  Hash::make(env('APP_ADMIN_USER_PASS')),
				'created_at' 		=> $dt,
				'updated_at' 		=> $dt,
			),
		);

		DB::table('users')->insert( $users );
	}

}