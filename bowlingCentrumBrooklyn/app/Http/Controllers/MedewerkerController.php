<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persoon;
use App\Models\Reservering;
use App\Models\Spel;
use App\Models\Uitslag;
use Illuminate\Support\Facades\DB;

class MedewerkerController extends Controller
{
    public function index()
    {
        $users = Persoon::all();
        $reservering = Reservering::find($users);
        $game = Spel::find($reservering);
        $point = Uitslag::find($game);
  
        $result = DB::select("SELECT P.voornaam, P.tussenvoegsel, P.achternaam, U.aantalPunten, R.id 
                            FROM persoons P, uitslags U, reserverings R 
                            WHERE P.id = U.id AND P.id = R.id");
        return view('medewerker.dashboard', [
            'result' => $result,
        ]);

        
    }
}
