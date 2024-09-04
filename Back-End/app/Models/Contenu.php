<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 
        'chemin', 
        'projet_id', 
        'date_ajout'
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
