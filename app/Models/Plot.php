<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    protected $table = 'plots'; // Si le nom de la table est différent du nom conventionnel

    protected $primaryKey = 'id_plots'; // Si la clé primaire est différente du nom conventionnel

    protected $fillable = [
        'id_user',
        'area',
        'location',
        'crop_planted',
        'planting_date',
        'expected_harvest_date'
    ];

    /**
     * Relation avec l'utilisateur propriétaire de la parcelle.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Récupère toutes les parcelles pour un utilisateur donné.
     *
     * @param int $idUser
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function allPlot($idUser)
    {
        return self::where('id_User', $idUser)->get();
    }

   
}
