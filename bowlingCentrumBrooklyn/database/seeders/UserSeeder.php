<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'persoonId' => 1,
            'name' => 'Mazin',
            'email' => 'm.jamil@gmail.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'medewerker',
            'email' => 'medewerker@gmail.com',
            'password' => 'password',
            'isMedewerker' => true,
        ]);
    }
}
