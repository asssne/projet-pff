<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biens_immeubiliers extends Model
{

// app/Models/BienImmeubilier.php

    protected $table = 'biens_immeubiliers'; // Nom de la table

    protected $fillable = [
        'numero',
        'taille',
        'prix',
        'img',
        'description',
        'users_id',
        'types_id',
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // Relation avec le modèle Type
    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
    // Méthode de suppression en cascade
    public function cascadeDelete()
    {
        // Supprimer les éléments liés avant de supprimer cet élément
        $this->user->delete(); // Supprime l'utilisateur associé (si nécessaire)
        $this->type->delete(); // Supprime le type associé (si nécessaire)

        // Supprimer cet élément
        $this->delete();
    }
}

