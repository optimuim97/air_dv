<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $table = 'catalogs';

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
