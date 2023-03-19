<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'name' => 'Jinoyat va jazo',
            'author' => 'Fyodor Dostayevskiy',
            'genre' => 'Detektiv',
            'about' => 'Bu kitob jinoyatning jazo olishi haqida'
        ]);
    }
}
