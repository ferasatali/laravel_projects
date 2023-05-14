<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tank extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tanks')->insert([
            'number_of_tanks' => 12,
            'number_of_tanks_used' => 10,
            'pump_id' => 1,
        ]);
    }
}
