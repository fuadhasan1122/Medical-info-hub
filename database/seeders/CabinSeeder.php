<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabinSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cabins')->insert([
            [
                'hospital_id' => 1,
                'type' => 'General',
                'price' => 1000
            ],
            [
                'hospital_id' => 2,
                'type' => 'VIP',
                'price' => 3000
            ],
        ]);
    }
}
