<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollaborationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'projet_id', 
        'utilisateur_id', 
        'statut', 
        'date_demande'
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }
}
