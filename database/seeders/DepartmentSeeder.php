<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Todo  Creating seeders of all table in this file for submission and vedio purpose
         
        // TOdo Creating seeder for table department
        \DB::table('department')->insert([
            'name' => 'it',
            'locations' => 'lahore',
            'number' => 323232322,
        ]);
            
        // TOdo Creating seeder for table project
        \DB::table('project')->insert([
            'name' => 'it',
            'locations' => 'lahore',
            'number' => 323232322,
            'department_id' => 1,
        ]);

        // TOdo Creating seeder for table employee
        \DB::table('employee')->insert([
            'ssn' => 'it',
            'Bdate' => '12-12-2022',
            'address' => 'sami town lahore',
            'salary' => 12342342,
            'sex' => 'Male',
            'Fname' => 'Muhammad',
            'Minit' => 'Ferasat',
            'Lname' => 'Ali',
            'department_id' => 1,
        ]);

        // TOdo Creating seeder for table department-employee
        \DB::table('department_employee')->insert([
            'start_date' => '12-12-2022',
            'department_id' => 1,
            'employee_id' => 1,
        ]); 


        // TOdo Creating seeder for table employee-project
        \DB::table('employee_project')->insert([
            'hours' => '10:10',
            'project_id' => 1,
            'employee_id' => 1,
        ]);

        // TOdo Creating seeder for table dependent
        \DB::table('dependent')->insert([
            'name' => 'sir arham',
            'birth_date' => '10-11-2000',
            'relationship' => 'true',
            'sex' => 'male',
            'employee_id' => 1,
        ]);
    }
}
