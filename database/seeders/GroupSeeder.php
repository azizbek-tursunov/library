<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'name' => 'Eng-FU-20',
            'major' => 'Filologiya va tillarni o\'qitish (ingliz tili)',
            'faculty' => 'Jahon tillari'
        ]);

        Group::create([
            'name' => 'Eng-HU-20',
            'major' => 'Filologiya va tillarni o\'qitish (ingliz tili)',
            'faculty' => 'Jahon tillari'
        ]);
    }
}
