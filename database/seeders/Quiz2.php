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
        \DB::table('quiz_students')->insert([
            'id' => '001',
            'cgpa' => 3.45,
            'rollNumber' => '12asda342342', 
        ]);
        \DB::table('quiz_students')->insert([
            'id' => '002',
            'cgpa' => 3.15,
            'rollNumber' => '1asdas2342342', 
        ]);
        \DB::table('quiz_students')->insert([
            'id' => '003',
            'cgpa' => 3.25,
            'rollNumber' => '12dasd342342', 
        ]);
        \DB::table('quiz_students')->insert([
            'id' => '004',
            'cgpa' => 3.15,
            'rollNumber' => '123asda2342', 
        ]);
    }
}
