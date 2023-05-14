<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Quiz2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('example_app')->insert([
            'id' => '11',
            'cgpa' => 1.45,
            'rollNumber' => '1111111', 
        ]);
        \DB::table('example_app')->insert([
            'id' => '12',
            'cgpa' => 4.15,
            'rollNumber' => '2222', 
        ]);
        
    }
}
1