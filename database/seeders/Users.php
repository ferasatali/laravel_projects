<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'ferasat',
            'phoneNumber' => 121121,
            'password' => 'ferasat',
            'sex' => 'male',
            'address' => 'lahore',
            'email' => 'f@gmail.com',
        ]);
    }
}
