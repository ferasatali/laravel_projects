<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Shifts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shifts')->insert([
            'employee_start_time' => '1:00',
            'employee_end_time' => '12:00',
            'hours' => '10',
            'employee_id' => 1,
        ]);

        \DB::table('shifts')->insert([
            'employee_start_time' => '1:00',
            'employee_end_time' => '12:00',
            'hours' => '10',
            'employee_id' => 1,
        ]);

        \DB::table('shifts')->insert([
            'employee_start_time' => '1:00',
            'employee_end_time' => '12:00',
            'hours' => '10',
            'employee_id' => 1,
        ]);
        \DB::table('shifts')->insert([
            'employee_start_time' => '1:00',
            'employee_end_time' => '12:00',
            'hours' => '10',
            'employee_id' => 1,
        ]);
    }
}
