<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];

    public function departement() : BelongsTo 
    {
        return $this->belongsTo(Departement::class , 'departement_id');
    }
}
