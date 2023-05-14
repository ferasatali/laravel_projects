<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fuel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fuel')->insert([
            'fuel_type' => 'Diesal',
            'fuel_price' => 288,
            'tax_rate' => 12, 
        ]);
        \DB::table('fuel')->insert([
            'fuel_type' => 'Petrol',
            'fuel_price' => 266,
            'tax_rate' => 11, 
        ]);
        \DB::table('fuel')->insert([
            'fuel_type' => 'Cng',
            'fuel_price' => 200,
            'tax_rate' => 11, 
        ]);
        \DB::table('fuel')->insert([
            'fuel_type' => 'High Octane',
            'fuel_price' => 290,
            'tax_rate' => 13, 
        ]);
    }
}
