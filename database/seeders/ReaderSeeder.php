<?php

namespace Database\Seeders;

use App\Models\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reader::create([
            'group_id' => 1,
            'name' => 'Azizbek',
            'surname' => 'Tursunov',
            'middle_name' => 'Raxmatullo o\'g\'li',
        ]);

        Reader::create([
            'group_id' => 2,
            'name' => 'Eldor',
            'surname' => 'Ochilov',
            'middle_name' => 'Elyor o\'g\'li',
        ]);
    }
}
