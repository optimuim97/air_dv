<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'description',
        'price'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
