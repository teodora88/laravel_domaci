<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tretman extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'vreme',
        'tezinaTretmana',
    ];

    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
}
