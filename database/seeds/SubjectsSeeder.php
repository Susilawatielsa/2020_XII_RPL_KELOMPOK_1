<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
        	'sbj_name' => 'PAB',
        ]);

        DB::table('subjects')->insert([
        	'sbj_name' => 'B.Indonesia',
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'PKN',
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'PDKK',
        ]);
        
        DB::table('subjects')->insert([
        	'sbj_name' => 'BASDAT',
        ]);
    }
}
