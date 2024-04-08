<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spel extends Model
{
    use HasFactory;

    protected $fillable = [
        'persoonId',
        'reserveringId',
    ];

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'persoonId');
    }

    public function reservering()
    {
        return $this->hasMany(Reservering::class, 'reserveringId');
    }
}
