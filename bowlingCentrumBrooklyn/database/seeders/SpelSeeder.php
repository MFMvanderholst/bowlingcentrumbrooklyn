<?php

namespace Database\Seeders;

use App\Models\Spel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spel::create([
            'persoonId' => 1,
            'reserveringId' => 1,
        ]);

        Spel::create([
            'persoonId' => 2,
            'reserveringId' => 2,
        ]);

        Spel::create([
            'persoonId' => 3,
            'reserveringId' => 3,
        ]);

        Spel::create([
            'persoonId' => 1,
            'reserveringId' => 4,
        ]);

        Spel::create([
            'persoonId' => 4,
            'reserveringId' => 5,
        ]);

        Spel::create([
            'persoonId' => 6,
            'reserveringId' => 4,
        ]);

        Spel::create([
            'persoonId' => 7,
            'reserveringId' => 4,
        ]);

        Spel::create([
            'persoonId' => 8,
            'reserveringId' => 4,
        ]);
    }
}
