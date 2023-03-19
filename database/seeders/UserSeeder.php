<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@man.com',
            'password' => Hash::make('secret')
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Kotiba',
            'email' => 'kotiba@man.com',
            'password' => Hash::make('secret')
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Kutubxonachi',
            'email' => 'kutubxonachi@man.com',
            'password' => Hash::make('secret')
        ]);
    }
}
