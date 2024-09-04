<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu', 
        'auteur_id', 
        'destinataire_id', 
        'date_envoi'
    ];

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    public function destinataire()
    {
        return $this->belongsTo(User::class, 'destinataire_id');
    }
}
