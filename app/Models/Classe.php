<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id','nom','annee_scolaire'
    ];

    public function etudiants(): HasMany
    {
        return $this->hasMany(Etudiant::class);
    }
}
