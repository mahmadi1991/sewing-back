<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailsModelTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('details_model')->insert([
			'id'       => 1,
			'hash'     => 'm9jg4n',
			'parentId' => 0,
			'title'    => 'دیپلمات',
			'cost'     => 90000,
		]);
		DB::table('details_model')->insert([
			'id'       => 2,
			'hash'     => 'Tyh67J',
			'parentId' => 0,
			'title'    => 'چهار گوش',
			'cost'     => 69000,
		]);
		DB::table('details_model')->insert([
			'id'       => 3,
			'hash'     => 'tygVf5',
			'parentId' => 0,
			'title'    => 'مربعی',
			'cost'     => 45000,
		]);
		DB::table('details_model')->insert([
			'id'       => 4,
			'hash'     => 'rtFcd3',
			'parentId' => 0,
			'title'    => 'دایره ای',
			'cost'     => 40000,
		]);
		DB::table('details_model')->insert([
			'id'       => 5,
			'hash'     => 'TyhjN6',
			'parentId' => 0,
			'title'    => 'ستاره ای',
			'cost'     => 39000,
		]);
	}
}
