<?php

namespace App\Models;

use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    public function enseignant(): BelongsTo
    {
        return $this->belongsTo(Enseignant::class);
    }
}
