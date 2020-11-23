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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(CitiesSeeder::class);
        // $this->call(ProvincesSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(YearsSeeder::class);
    }
}
