<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $table = 'currencies';

    public $fillable = [
        'name',
        'country_code',
        'dial_code'
    ];

    protected $casts = [
        'name' => 'string',
        'country_code' => 'string',
        'dial_code' => 'string'
    ];

    public static $rules = [
        'name' => 'nullable|string',
        'country_code' => 'nullable|string',
        'dial_code' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
