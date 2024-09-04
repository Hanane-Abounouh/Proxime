<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom', 
        'email', 
        'mot_de_passe', 
      
        'role_id'
    ];

    protected $hidden = [
        'mot_de_passe', 
        'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function projets()
    {
        return $this->hasMany(Projet::class, 'createur_id');
    }

    public function messagesEnvoyes()
    {
        return $this->hasMany(Message::class, 'auteur_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function demandesCollaboration()
    {
        return $this->hasMany(CollaborationRequest::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'auteur_id');
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class);
    }
}
