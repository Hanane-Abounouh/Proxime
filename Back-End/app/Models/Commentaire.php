<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu', 
        'auteur_id', 
        'projet_id', 
        'tache_id', 
        'date_envoi'
    ];

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function tache()
    {
        return $this->belongsTo(Tache::class);
    }
}
