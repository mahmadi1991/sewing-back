<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FabricTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('fabric')->insert([
			'id'              => 1,
			'hash'            => 'S4t4r',
			'areaId'          => '1',
			'typeId'          => '1',
			'title'           => 'ابریشم آبی وارداتی از چین',
			'cost'            => 99000,
			'discountPercent' => 10,
			'discountStatus'  => 'Y',
			'stockStatus'     => 'Y',
		]);

		DB::table('fabric')->insert([
			'id'              => 2,
			'hash'            => 'm9jg4n',
			'areaId'          => '2',
			'typeId'          => '2',
			'title'           => 'ابریشم آبی وارداتی از افغانستان',
			'cost'            => 70000,
			'discountPercent' => 0,
			'discountStatus'  => 'N',
			'stockStatus'     => 'Y',
		]);

		DB::table('fabric')->insert([
			'id'              => 3,
			'hash'            => '4B45S',
			'areaId'          => '3',
			'typeId'          => '3',
			'title'           => 'ایرانی',
			'cost'            => 30000,
			'discountPercent' => 0,
			'discountStatus'  => 'N',
			'stockStatus'     => 'N',
		]);
	}
}
