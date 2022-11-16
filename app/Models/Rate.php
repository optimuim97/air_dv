<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $table = 'rates';

    public $fillable = [
        'service_id',
        'prix',
        'currency_id'
    ];

    protected $casts = [
        'service_id' => 'integer',
        'prix' => 'string',
        'currency_id' => 'integer'
    ];

    public static $rules = [
        
    ];

    
}
