<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelConsumption extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fuel_consumption')->insert([
            'fuel_available' => 900,
            'fuel_id' => 1, 
            'total_fuel' => 1200, 
        ]);
        \DB::table('fuel_consumption')->insert([
            'total_fuel' => 1100, 
            'fuel_available' => 700,
            'fuel_id' => 2, 
        ]);
        \DB::table('fuel_consumption')->insert([
            'total_fuel' => 1300, 
            'fuel_available' => 900,
            'fuel_id' => 3, 
        ]);
        \DB::table('fuel_consumption')->insert([
            'total_fuel' => 1500, 
            'fuel_available' => 600,
            'fuel_id' => 4, 
        ]);
    }
}
