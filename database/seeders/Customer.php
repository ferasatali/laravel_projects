<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('customer')->insert([
            'customer_name' => 'Ferasat Ali',
            'phone' => 283232323,
            'email' => 'ferasatali@gmail.com',
            'car_name' => 'sedan', 
        ]);
        \DB::table('customer')->insert([
            'customer_name' => 'Basit Ali',
            'phone' => 23234234,
            'email' => 'mbasit@gmail.com',
            'car_name' => 'suv', 
        ]);
        \DB::table('customer')->insert([
            'customer_name' => 'Asad Ali',
            'phone' => 23234234,
            'email' => 'asad@gmail.com',
            'car_name' => 'civic', 
        ]);
        \DB::table('customer')->insert([
            'customer_name' => 'Muhammad Ali',
            'phone' => 23234234,
            'email' => 'mali12@gmail.com',
            'car_name' => 'city', 
        ]);
    }
}
