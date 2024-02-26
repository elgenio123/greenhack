<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yields extends Model
{
    use HasFactory;

    protected $table = 'yields';

    protected $primaryKey = 'id_yield';

    protected $fillable = [
        'id_plot', 
        'yield_kg_per_ha',
        'harvest_date',
        'harvest_quality',
        'production_factors',
        
    ];

    /**
     * Relation with the plot associated with the yield.
     */
    public function plot()
    {
        return $this->belongsTo(Parcel::class, 'id_plot', 'id');
    }
}
