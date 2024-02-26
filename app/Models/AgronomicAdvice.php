<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgronomicAdvice extends Model
{
    use HasFactory;

    protected $table = 'agronomic_advices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'plot_id',
        'advice_date',
        'advice_description',
    ];

    /**
     * Relation avec la parcelle associée à l'avis agronomique.
     */
    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id', 'id');
    }

}
