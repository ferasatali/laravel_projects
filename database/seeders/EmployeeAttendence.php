<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeAttendence extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employee_attendence')->insert([
            'status' => true,
            'leave'=> false,
            'left'=> 10,
            'employee_id' => 1
        ]);
        \DB::table('employee_attendence')->insert([
            'status' => true,
            'leave'=> false,
            'left'=> 10,
            'employee_id' => 1
        ]);
        \DB::table('employee_attendence')->insert([
            'status' => true,
            'leave'=> false,
            'left'=> 10,
            'employee_id' => 1
        ]);
        \DB::table('employee_attendence')->insert([
            'status' => true,
            'leave'=> false,
            'left'=> 10,
            'employee_id' => 1
        ]);
    }
}
