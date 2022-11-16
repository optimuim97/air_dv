<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomEvent extends Model
{
    public $table = 'custom_events';

    public $fillable = [
        'title',
        'description',
        'image',
        'date'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'date' => 'string'
    ];

    public static $rules = [
        
    ];

    
}
