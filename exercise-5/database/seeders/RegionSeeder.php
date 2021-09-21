<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lib_regions')->delete();

        DB::table('lib_regions')->insert([
            [
                'region_code' => '050000000',
                'region_name' => 'REGION V [Bicol Region]',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'region_code' => '060000000',
                'region_name' => 'REGION VI [Western Visayas] ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'region_code' => '070000000',
                'region_name' => 'REGION VII [Central Visayas]',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'region_code' => '080000000',
                'region_name' => 'REGION VIII [Eastern Visayas]',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
