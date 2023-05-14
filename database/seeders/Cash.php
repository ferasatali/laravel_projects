<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cash extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cash')->insert([
            'total_cash' => 100000,
            'pump_id' => 1
        ]);
        \DB::table('cash')->insert([
            'total_cash' => 100000,
            'pump_id' => 1
        ]);
        \DB::table('cash')->insert([
            'total_cash' => 100000,
            'pump_id' => 1
        ]);
        \DB::table('cash')->insert([
            'total_cash' => 100000,
            'pump_id' => 1
        ]);
    }
}
