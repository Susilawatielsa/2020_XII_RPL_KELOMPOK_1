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
<<<<<<< HEAD
      
=======
>>>>>>> 394e78e08df067c6718152e2a1dd603d2008951c
    }
}
