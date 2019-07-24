<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SizeTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('size')->insert([
			'id'            => 1,
			'hash'          => 'yTh4jS',
			'userId'        => 1,
			'length'        => 185,
			'shoulderWidth' => 40,
			'chest'         => 50,
			'armLength'     => 35,
			'waist'         => 30,
		]);

		DB::table('size')->insert([
			'id'            => 2,
			'hash'          => 'RtghS5',
			'userId'        => 1,
			'length'        => 170,
			'shoulderWidth' => 30,
			'chest'         => 40,
			'armLength'     => 25,
			'waist'         => 20,
		]);

		DB::table('size')->insert([
			'id'            => 3,
			'hash'          => 'UiKjtG',
			'userId'        => 2,
			'length'        => 160,
			'shoulderWidth' => 20,
			'chest'         => 30,
			'armLength'     => 25,
			'waist'         => 20,
		]);

		DB::table('size')->insert([
			'id'            => 4,
			'hash'          => 'ErfvC7',
			'userId'        => 2,
			'length'        => 175,
			'shoulderWidth' => 35,
			'chest'         => 30,
			'armLength'     => 20,
			'waist'         => 25,
		]);
	}
}
