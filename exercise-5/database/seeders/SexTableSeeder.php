<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SexTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lib_sex')->delete();

        DB::table('lib_sex')->insert([

            [
                'sex_id' => 1,
                'name' => 'Male',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'sex_id' => 2,
                'name' => 'Female',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'sex_id' => 3,
                'name' => 'Unknown',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
