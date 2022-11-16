<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public $table = 'service_types';

    public $fillable = [
        'name',
        'description',
        'image'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    public static $rules = [
        
    ];

    
}
