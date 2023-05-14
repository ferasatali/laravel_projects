<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarWash extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('car_wash')->insert([
            'wash_type' => 'Service',
            'wash_price' => 300,
            'vehicle_id' => 1,
            'employee_id' => 1, 
        ]);
        \DB::table('car_wash')->insert([
            'wash_type' => 'Service',
            'wash_price' => 300,
            'vehicle_id' => 2,
            'employee_id' => 2, 
        ]);
        \DB::table('car_wash')->insert([
            'wash_type' => 'Service',
            'wash_price' => 300,
            'vehicle_id' => 3,
            'employee_id' => 3, 
        ]);
        \DB::table('car_wash')->insert([
            'wash_type' => 'Service',
            'wash_price' => 300,
            'vehicle_id' => 4,
            'employee_id' => 4, 
        ]);
    }
}
