<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Security extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pump_security')->insert([
            'timing' => '18',
            'employee_id' => 2,
        ]);
        \DB::table('pump_security')->insert([
            'timing' => '18',
            'employee_id' => 3,
        ]);
    }
}
