<?php

use Illuminate\Database\Seeder;

class YearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
        	'yrs_id'=>1,
        	'yrs_name'=>"2016/2017",
        ]);
        DB::table('years')->insert([
        	'yrs_id'=>2,
        	'yrs_name'=>"2017/2018",
        ]);
        DB::table('years')->insert([
        	'yrs_id'=>3,
        	'yrs_name'=>"2018/2019",
        ]);
        DB::table('years')->insert([
        	'yrs_id'=>4,
        	'yrs_name'=>"2019/2020",
        ]);
        DB::table('years')->insert([
        	'yrs_id'=>5,
        	'yrs_name'=>"2020/2021",
        ]);
        DB::table('years')->insert([
        	'yrs_id'=>6,
        	'yrs_name'=>"2021/2022",
        ]);
    }
}
