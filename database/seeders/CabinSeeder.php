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
                'type' => 'General',
                'price' => 1500,
                'hospital_id' => 1,
            ],
            [
                'type' => 'AC Deluxe',
                'price' => 3000,
                'hospital_id' => 2,
            ],
        ]);
    }
}
