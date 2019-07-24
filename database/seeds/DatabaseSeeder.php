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
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserRoleTableSeeder::class);
         $this->call(AreaTableSeeder::class);
         $this->call(CityTableSeeder::class);
         $this->call(OrderTableSeeder::class);
         $this->call(OrderDetailsTableSeeder::class);
         $this->call(DiscountCodeTableSeeder::class);
    }
}
