<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('awp_practice')->insert([
            'id' => '004',
            'cgpa' => 3.15,
            'rollNumber' => '123asda2342', 
        ]);
    }
}
