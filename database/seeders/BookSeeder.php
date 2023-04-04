<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'genre_id' => 1,
            'name' => 'Jinoyat va jazo',
            'author' => 'Fyodor Dostayevskiy',
            'about' => 'Bu kitob jinoyatning jazo olishi haqida',
        ]);
    }
}
