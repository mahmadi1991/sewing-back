<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DishdashaModelTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dishdasha_model')->insert([
			'id'    => 1,
			'hash'  => 'ErfvC7',
			'title' => 'عادی',
			'order' => 4,
		]);

		DB::table('dishdasha_model')->insert([
			'id'    => 2,
			'hash'  => 'TyuHj7',
			'title' => 'آستین چین دار',
			'order' => 2,
		]);

		DB::table('dishdasha_model')->insert([
			'id'    => 3,
			'hash'  => 'YujhG6',
			'title' => 'جامعی',
			'order' => 1,
		]);

		DB::table('dishdasha_model')->insert([
			'id'    => 4,
			'hash'  => 'poKlm9',
			'title' => 'جامعی',
			'order' => 3,
		]);

		DB::table('dishdasha_model')->insert([
			'id'    => 5,
			'hash'  => 'Yuhnb6',
			'title' => 'غیر معمولی',
			'order' => 5,
		]);
	}
}
