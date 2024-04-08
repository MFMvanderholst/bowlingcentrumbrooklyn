<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;

    protected $fillable = [
        'persoonId',
        'openingstijdId',
        'tariefId',
        'baanId',
        'pakketOptieId',
        'reserveringStatusId',
        'reserveringsNummer',
        'datum',
        'aantaluren',
        'begintijd',
        'eindtijd',
        'aantalVolwassen',
        'aantalKinderen',

    ];
}
