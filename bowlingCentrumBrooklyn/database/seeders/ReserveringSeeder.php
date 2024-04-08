<?php

namespace Database\Seeders;

use App\Models\Reservering;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservering::create([
            'persoonId' => 1,
            'openingstijdId' => 2,
            'tariefId' => 1,
            'baanId' => 8,
            'pakketOptieId' => 1,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122000001,
            'datum' => '2022-12-20',
            'aantaluren' => 1,
            'begintijd' => '15:00:00',
            'eindtijd' => '16:00:00',
            'aantalVolwassen' => 4,
            'aantalKinderen' => 2,
        ]);

        Reservering::create([
            'persoonId' => 2,
            'openingstijdId' => 2,
            'tariefId' => 1,
            'baanId' => 2,
            'pakketOptieId' => 3,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122000002,
            'datum' => '2022-12-20',
            'aantaluren' => 1,
            'begintijd' => '17:00:00',
            'eindtijd' => '18:00:00',
            'aantalVolwassen' => 4,
            'aantalKinderen' => null,
        ]);

        Reservering::create([
            'persoonId' => 3,
            'openingstijdId' => 7,
            'tariefId' => 2,
            'baanId' => 3,
            'pakketOptieId' => 1,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122400003,
            'datum' => '2022-12-24',
            'aantaluren' => 2,
            'begintijd' => '16:00:00',
            'eindtijd' => '18:00:00',
            'aantalVolwassen' => 4,
            'aantalKinderen' => null,
        ]);

        Reservering::create([
            'persoonId' => 1,
            'openingstijdId' => 2,
            'tariefId' => 1,
            'baanId' => 6,
            'pakketOptieId' => null,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122700004,
            'datum' => '2022-12-27',
            'aantaluren' => 2,
            'begintijd' => '17:00:00',
            'eindtijd' => '19:00:00',
            'aantalVolwassen' => 2,
            'aantalKinderen' => null,
        ]);

        Reservering::create([
            'persoonId' => 4,
            'openingstijdId' => 3,
            'tariefId' => 1,
            'baanId' => 4,
            'pakketOptieId' => 4,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122800005,
            'datum' => '2022-12-28',
            'aantaluren' => 1,
            'begintijd' => '14:00:00',
            'eindtijd' => '15:00:00',
            'aantalVolwassen' => 3,
            'aantalKinderen' => null,
        ]);

        Reservering::create([
            'persoonId' => 5,
            'openingstijdId' => 10,
            'tariefId' => 3,
            'baanId' => 5,
            'pakketOptieId' => 4,
            'reserveringStatusId' => 1,
            'reserveringsNummer' => 2022122800006,
            'datum' => '2022-12-28',
            'aantaluren' => 2,
            'begintijd' => '19:00:00',
            'eindtijd' => '21:00:00',
            'aantalVolwassen' => 2,
            'aantalKinderen' => null,
        ]);
    }
}
