<?php

use Illuminate\Database\Seeder;

class SchoolYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_years')->insert([
        	'scy_name' => '2016/2017',
        ]);

        DB::table('school_years')->insert([
        	'scy_name' => '2017/2018',
        ]);

        DB::table('school_years')->insert([
        	'scy_name' => '2018/2019',
        ]);

        DB::table('school_years')->insert([
        	'scy_name' => '2019/2020',
        ]);

        DB::table('school_years')->insert([
        	'scy_name' => '2020/2021',
        ]);
    }
}
