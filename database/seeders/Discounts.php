<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Discounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pump_discounts')->insert([
            'discount_codes' => 'f1f2f3',
            'is_used' => true,
            'discount_price' => 20,
            'customer_id' => 1,
        ]);
        \DB::table('pump_discounts')->insert([
            'discount_codes' => 'f1f2f3',
            'is_used' => true,
            'discount_price' => 20,
            'customer_id' => 1,
        ]);
        \DB::table('pump_discounts')->insert([
            'discount_codes' => 'f1f2f3',
            'is_used' => true,
            'discount_price' => 20,
            'customer_id' => 1,
        ]);
        \DB::table('pump_discounts')->insert([
            'discount_codes' => 'f1f2f3',
            'is_used' => true,
            'discount_price' => 20,
            'customer_id' => 1,
        ]);
    }
}
