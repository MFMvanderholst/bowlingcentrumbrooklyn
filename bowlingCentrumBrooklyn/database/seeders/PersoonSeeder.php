<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persoon;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persoon::create([
            'typePersoonId' => 1,
            'voornaam' => 'Mazin',
            'tussenvoegsel' => null,
            'achternaam' => 'Jamil',
            'roepnaam' => 'Mazin',
            'isVolwassen' => true,
        ]);

        Persoon::create([
            'typePersoonId' => 1,
            'voornaam' => 'Arjan',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Ruiter',
            'roepnaam' => 'Arjan',
            'isVolwassen' => true,
        ]);

        Persoon::create([
            'typePersoonId' => 1,
            'voornaam' => 'Hans',
            'tussenvoegsel' => null,
            'achternaam' => 'Odijk',
            'roepnaam' => 'Hans',
            'isVolwassen' => true,
        ]);

        Persoon::create([
            'typePersoonId' => 1,
            'voornaam' => 'Dennis',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Wakeren',
            'roepnaam' => 'Dennis',
            'isVolwassen' => true,
        ]);

        Persoon::create([
            'typePersoonId' => 2,
            'voornaam' => 'Wilco',
            'tussenvoegsel' => 'van de',
            'achternaam' => 'Grift',
            'roepnaam' => 'Wilco',
            'isVolwassen' => true,
        ]);

        Persoon::create([
            'typePersoonId' => 3,
            'voornaam' => 'Tom',
            'tussenvoegsel' => null,
            'achternaam' => 'Sanders',
            'roepnaam' => 'Tom',
            'isVolwassen' => false,
        ]);

        Persoon::create([
            'typePersoonId' => 3,
            'voornaam' => 'Andrew',
            'tussenvoegsel' => null,
            'achternaam' => 'Sanders',
            'roepnaam' => 'Andrew',
            'isVolwassen' => false,
        ]);

        Persoon::create([
            'typePersoonId' => 3,
            'voornaam' => 'Julian',
            'tussenvoegsel' => null,
            'achternaam' => 'Kaldenheuvel',
            'roepnaam' => 'Julian',
            'isVolwassen' => true,
        ]);
    }
}
