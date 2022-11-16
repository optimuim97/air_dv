<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdresseHome extends Model
{
    public $table = 'adresse_homes';

    public $fillable = [
        'lat',
        'lon',
        'adresse_name'
    ];

    protected $casts = [
        'lat' => 'float',
        'lon' => 'float',
        'adresse_name' => 'string'
    ];

    public static $rules = [
        
    ];

    
}
