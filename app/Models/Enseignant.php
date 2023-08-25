<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    public function matiere(): BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }
}
