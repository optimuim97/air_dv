<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'services';

    public $fillable = [
        'name',
        'description',
        'catalog_id',
        'service_type_id'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'catalog_id' => 'integer',
        'service_type_id' => 'string'
    ];

    public static $rules = [
        
    ];

    
}
