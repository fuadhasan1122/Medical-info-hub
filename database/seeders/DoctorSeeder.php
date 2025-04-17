<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'name' => 'Dr. Fuad Hasan',
            'specialty' => 'Cardiologist',
            'qualification' => 'MBBS, FCPS',
            'contact' => '017xxxxxxxx',
            'chamber_time' => 'Sun-Thu, 5PM-9PM',
            'hospital' => 'Mount Adora Hospital, Sylhet',
        ]);

        Doctor::create([
            'name' => 'Dr. Rubaiya Rahman',
            'specialty' => 'Neurologist',
            'qualification' => 'MBBS, MD (Neuro)',
            'contact' => '018xxxxxxxx',
            'chamber_time' => 'Mon-Wed, 10AM-2PM',
            'hospital' => 'Osmani Diagnostic Center',
        ]);
    }
}
