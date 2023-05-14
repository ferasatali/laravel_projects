<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Repairs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('repair_cars')->insert([
            'repair_price' => 1200,
            'vehicle_id' => 1,
            'employee_id' => 1, 
        ]);
        \DB::table('repair_cars')->insert([
            'repair_price' => 1200,
            'vehicle_id' => 2,
            'employee_id' => 2, 
        ]);
        \DB::table('repair_cars')->insert([
            'repair_price' => 1200,
            'vehicle_id' => 3,
            'employee_id' => 3, 
        ]);
        \DB::table('repair_cars')->insert([
            'repair_price' => 1200,
            'vehicle_id' => 4,
            'employee_id' => 4, 
        ]);
    }
}
