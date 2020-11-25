<?php

use Illuminate\Database\Seeder;

class PositionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position_types')->insert([
        	'pst_name' => 'staf kepegawaian',
        ]);

        DB::table('position_types')->insert([
        	'pst_name' => 'staf kesiswaan',
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'staf persuratan',
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'staf sarana prasarana',
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'guru produktif',
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'guru matapelajaran',
        ]);
        
        DB::table('position_types')->insert([
        	'pst_name' => 'wali kelas',
        ]);
    }
}
