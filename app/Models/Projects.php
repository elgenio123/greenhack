<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'plant_id',
        // Ajoutez d'autres colonnes que vous souhaitez remplir
    ];

    /**
     * Relation avec l'utilisateur propriétaire du projet.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Relation avec la plante associée au projet.
     */
    public function plant()
    {

        return $this->belongsTo(Plans::class, 'plant_id', 'id');
    }
}
