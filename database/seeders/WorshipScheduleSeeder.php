<?php

namespace Database\Seeders;

use App\Models\WorshipSchedule;
use Illuminate\Database\Seeder;

class WorshipScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorshipSchedule::create([
            'title' => 'Ibadah Hari Minggu',
            'day' => 'Minggu',
            'time' => '09:00',
            'location' => 'Gedung Gereja',
            'description' => 'Ibadah Hari Minggu umum.',
            'is_active' => true,
        ]);

        WorshipSchedule::create([
            'title' => 'Ibadah Hari Minggu Pelayanan Anak',
            'day' => 'Minggu',
            'time' => '09:00',
            'location' => 'Gedung Serbaguna Samping',
            'description' => 'Ibadah Hari Minggu untuk pelkat anak.',
            'is_active' => true,
        ]);

        WorshipSchedule::create([
            'title' => 'Ibadah Hari Minggu Pelayanan Teruna',
            'day' => 'Minggu',
            'time' => '07:00',
            'location' => 'Gedung Serbaguna Belakang',
            'description' => 'Ibadah Hari Minggu untuk pelkat teruna',
            'is_active' => true,
        ]);
    }
}
