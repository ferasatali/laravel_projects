<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Vehicles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vehicles')->insert([
            'name' => 'Diesal',
            'fuel_price' => 288,
            'customer_id' => 1, 
        ]);
        \DB::table('vehicles')->insert([
            'name' => 'Petrol',
            'fuel_price' => 266,
            'customer_id' => 2, 
        ]);
        \DB::table('vehicles')->insert([
            'name' => 'Cng',
            'fuel_price' => 200,
            'customer_id' => 3, 
        ]);
        \DB::table('vehicles')->insert([
            'name' => 'High Octane',
            'fuel_price' => 290,
            'customer_id' => 4, 
        ]);
    }
}
