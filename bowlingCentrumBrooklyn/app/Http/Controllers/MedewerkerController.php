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
        $result = DB::select("SELECT P.voornaam, P.tussenvoegsel, P.achternaam, U.aantalPunten, R.id 
                            FROM persoons P, uitslags U, reserverings R 
                            WHERE P.id = U.id 
                            AND P.id = R.id
                            ORDER BY U.aantalPunten");

        return view('medewerker.dashboard', [
            'result' => $result,
        ]);
    }

    public function edit($id)
    {
        $result = Spel::find($id);
        $points = Uitslag::find($result->id);
        return view('medewerker.edit', [
            'points' => $points,
        ]);
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'aantalpunten' => 'required|numeric|min:0|max:300',
        ]);

        $points = Uitslag::find($id);
        $points->aantalPunten = $request->aantalpunten;
        $points->update([
            'aantalPunten' => $request->aantalpunten,
        ]);
        return redirect('medewerker/dashboard');
    }
}
