<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employee')->insert([
            'name' => 'Ferasat Ali',
            'phone' => 283232323,
            'email' => 'ferasatali@gmail.com',
            'salary' => 12000,
            'time' => '11',
            'address' => 'Lahore',
        ]);
        \DB::table('employee')->insert([
            'name' => 'Basit Ali',
            'phone' => 23234234,
            'email' => 'mbasit@gmail.com',
            'salary' => 12000,
            'time' => '11',
            'address' => 'Lahore',
        ]);
        \DB::table('employee')->insert([
            'name' => 'Asad Ali',
            'phone' => 23234234,
            'email' => 'asad@gmail.com',
            'salary' => 12000,
            'time' => '11',
            'address' => 'Lahore',
        ]);
        \DB::table('employee')->insert([
            'name' => 'Muhammad Ali',
            'phone' => 23234234,
            'email' => 'mali12@gmail.com',
            'salary' => 12000,
            'time' => '11',
            'address' => 'Lahore',
        ]);
    }
}
