<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'classe_id','nom','prenom','sexe','date_naissance','adresse','phone','email','photo','date_inscription'
    ];

    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }
}
