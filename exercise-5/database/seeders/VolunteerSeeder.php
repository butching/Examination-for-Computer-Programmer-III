<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteers')->truncate();

        DB::table('volunteers')->insert([
            [
                'VolunteerId' => 1,
                'FirstName' => 'Chris Albert',
                'LastName' => 'Navarroza',
                'Age' => 35,
                'BirthDate' => '1986-06-25',
                'sex_id' => 1,
                'region_code' => '060000000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'VolunteerId' => 2,
                'FirstName' => 'Cherrie',
                'LastName' => 'Danguilan',
                'Age' => 21,
                'BirthDate' => '2000-09-13',
                'sex_id' => 2,
                'region_code' => '050000000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
