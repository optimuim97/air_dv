<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public $table = 'occupations';

    public $fillable = [
        'name',
        'description',
        'years'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'years' => 'integer'
    ];

    public static $rules = [
        
    ];

    
}
