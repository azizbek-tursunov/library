<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'group_id' => 1,
            'name' => 'Azizbek',
            'surname' => 'Tursunov',
            'middle_name' => 'Raxmatullo o\'g\'li',
        ]);

        Student::create([
            'group_id' => 2,
            'name' => 'Eldor',
            'surname' => 'Ochilov',
            'middle_name' => 'Elyor o\'g\'li',
        ]);
    }
}
