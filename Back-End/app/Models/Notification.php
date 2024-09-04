<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu', 
        'utilisateur_id', 
        'projet_id', 
        'lu', 
        'date_creation'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }
}
