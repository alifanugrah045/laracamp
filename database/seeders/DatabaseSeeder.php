<?php

namespace Database\Seeders;

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
        // 1st method
        $this->call([
            CampTableSeeder::class,
            CampBenefitTableSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
