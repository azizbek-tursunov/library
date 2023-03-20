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
            'major_id' => 1,
            'name' => 'Eng-FU-20',
        ]);

        Group::create([
            'major_id' => 1,
            'name' => 'Eng-HU-20',
        ]);

        Group::create([
            'major_id' => 2,
            'name' => 'Ing-AU-20',
        ]);
    }
}
