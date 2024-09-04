<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'description', 
        'projet_id', 
        'assigné_a', 
        'statut', 
        'date_creation', 
        'date_echeance'
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function assignéA()
    {
        return $this->belongsTo(User::class, 'assigné_a');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
