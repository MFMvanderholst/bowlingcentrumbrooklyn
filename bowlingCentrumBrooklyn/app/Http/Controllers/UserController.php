<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persoon;
use App\Models\Reservering;
use App\Models\Spel;
use App\Models\Uitslag;


class UserController extends Controller
{
    public function index()
    {
       
        $user = User::findorfail(auth()->id());
        $persoon = Persoon::find($user);
        $game = Spel::find($persoon);
        $points = Uitslag::find($game);
        $date = Reservering::find($persoon);
        return view('user.dashboard', compact('persoon', 'date', 'points'));
    }

    public function show($value)
    {
        $date = Reservering::find($value);
        $user = User::findorfail(auth()->id());
        $persoon = Persoon::find($user);
        $game = Spel::find($persoon);
        $points = Uitslag::find($game);
        return view('user.show', compact('persoon', 'date', 'points'));
    }
}
