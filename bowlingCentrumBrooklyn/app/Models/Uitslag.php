<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitslag extends Model
{
    use HasFactory;

    protected $fillable = [
        'spelId',
        'aantalPunten',
    ];

    public function spel()
    {
        return $this->belongsTo(Spel::class, 'spelId');
    }
}
