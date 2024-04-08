<?php

namespace Database\Seeders;

use App\Models\Uitslag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UitslagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Uitslag::create([
            'spelId' => 1,
            'aantalPunten' => 290,
        ]);

        Uitslag::create([
            'spelId' => 2,
            'aantalPunten' => 300,
        ]);

        Uitslag::create([
            'spelId' => 3,
            'aantalPunten' => 120,
        ]);

        Uitslag::create([
            'spelId' => 4,
            'aantalPunten' => 34,
        ]);

        Uitslag::create([
            'spelId' => 5,
            'aantalPunten' => 42,
        ]);

        Uitslag::create([
            'spelId' => 6,
            'aantalPunten' => 234,
        ]);

        Uitslag::create([
            'spelId' => 7,
            'aantalPunten' => 299,
        ]);

        Uitslag::create([
            'spelId' => 8,
            'aantalPunten' => 255,
        ]);
    }
}
