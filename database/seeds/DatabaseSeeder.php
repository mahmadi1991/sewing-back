<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
			FabricTableSeeder::class,
			AddressTableSeeder::class,
			SizeTableSeeder::class,
			DishdashaModelTableSeeder::class,
			DetailsModelTableSeeder::class,
		]);
    }
}
