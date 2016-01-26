<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->insert([
            'name' => 'gebrak',
            'email' => 'gebrak@gmail.com',
            'password' => Hash::make('gebrak'),
            ]);
	}

}
