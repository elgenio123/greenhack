<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model
{
    use HasFactory;

    protected $table = 'weather_data';

    protected $primaryKey = 'id'; 
    protected $fillable = [
        'date',
        'temperature',
        'humidity',
        'precipitation',
        'wind_speed',
      
    ]; 
}

