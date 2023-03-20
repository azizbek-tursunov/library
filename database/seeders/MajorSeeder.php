<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::create([
            'name' => 'Filologiya va tillarni o\'qitish (ingliz tili)',
        ]);
        Major::create([
            'name' => 'Xorijiy til va adabiyoti (ingliz tili)',
        ]);
        Major::create([
            'name' => 'Amaliy matematika',
        ]);
    }
}
