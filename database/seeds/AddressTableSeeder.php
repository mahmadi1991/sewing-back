<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AddressTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('address')->insert([
			'id'              => 1,
			'hash'            => 'm9jg4n',
			'userId'          => 1,
			'areaId'          => 1,
			'postalCode'      => 54686961,
			'address'         => 'اراک خیابان خرم کوچه کندی اواسط کوچه',
		]);

		DB::table('address')->insert([
			'id'              => 2,
			'hash'            => '4sGGhS',
			'userId'          => 1,
			'areaId'          => 2,
			'postalCode'      => 58746921,
			'address'         => 'اراک خیابان ملک خیابان 12 متری کوچه عباسی',
		]);

		DB::table('address')->insert([
			'id'              => 3,
			'hash'            => 'yTh4jS',
			'userId'          => 2,
			'areaId'          => 3,
			'postalCode'      => 58746921,
			'address'         => 'اراک خیابان هپکو خیابان نواب خیابان مدرس کوچه یاس 11',
		]);

		DB::table('address')->insert([
			'id'              => 4,
			'hash'            => 'Uikm6G',
			'userId'          => 2,
			'areaId'          => 1,
			'postalCode'      => 58746921,
			'address'         => 'اراک خیابان هپکو خیابان شهید بهشتی فاز 2 شهریور 6',
		]);
	}
}
