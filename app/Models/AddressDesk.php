<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressDesk extends Model
{
    public $table = 'address_desks';

    public $fillable = [
        'lat',
        'lon',
        'adresse_name'
    ];

    protected $casts = [
        'lat' => 'float',
        'lon' => 'float',
        'adresse_name' => 'float'
    ];

    public static $rules = [
        
    ];

    
}
