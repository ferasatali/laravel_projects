<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pump_shops')->insert([
            'total_cash' => 10000,
            'pump_id' => 1,
            'employee_id' => 1,
        ]);
        \DB::table('pump_shops')->insert([
            'total_cash' => 10000,
            'pump_id' => 1,
            'employee_id' => 1,
        ]);
        \DB::table('pump_shops')->insert([
            'total_cash' => 10000,
            'pump_id' => 1,
            'employee_id' => 1,
        ]);
        \DB::table('pump_shops')->insert([
            'total_cash' => 10000,
            'pump_id' => 1,
            'employee_id' => 1,
        ]);
    }
}
