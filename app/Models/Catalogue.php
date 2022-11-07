<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    public $table = 'catalogues';

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
