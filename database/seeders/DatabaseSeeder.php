<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UsersTableSeeder::class);
        $this->call(ContactFormSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(RouteShopSeeder::class);
    }
}
