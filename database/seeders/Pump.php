<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pump extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pump')->insert([
            'name' => 'PSO',
            'phone' => 283232323,   
            'email' => 'pump123@gmail.com',
            'address' => 'lahore',
            'employee_available' => 12, 
            'tanks_available' => true, 
            'shops_available' => true, 
        ]);
    }
}
