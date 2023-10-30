<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_debut',
        'date_sortie',
         'nombre',
        'users_id',
        'biens_immeubiliers_id',
    ];

   public function users()
   {
    return $this->belongsTo(users::class);
   }
   public function meuble()
   {
    return $this->belongsTo(meuble::class);
   }
}
