<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        Hospital::create([
            'name' => 'Mount Adora Hospital, Sylhet',
            'address' => 'Nayasarak, Sylhet',
            'contact' => '017xxxxxxxx',
        ]);

        Hospital::create([
            'name' => 'Osmani Diagnostic Center',
            'address' => 'Zindabazar, Sylhet',
            'contact' => '018xxxxxxxx',
        ]);
    }
}
