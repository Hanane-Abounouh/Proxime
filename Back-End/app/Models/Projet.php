<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'description', 
        'date_de_creation', 
        'statut', 
        'createur_id'
    ];

    public function createur()
    {
        return $this->belongsTo(User::class, 'createur_id');
    }

    public function taches()
    {
        return $this->hasMany(Tache::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
