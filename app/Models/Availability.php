<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    public $table = 'availabilities';

    public $fillable = [
        'start_date',
        'end_date',
        'start_time_date',
        'start_time',
        'end_time_date',
        'end_time'
    ];

    protected $casts = [
        'start_date' => 'string',
        'end_date' => 'string',
        'start_time_date' => 'datetime',
        'start_time' => 'string',
        'end_time_date' => 'datetime',
        'end_time' => 'string'
    ];

    public static $rules = [
        'start_date' => 'required|string',
        'end_date' => 'required|string',
        'start_time_date' => 'required',
        'start_time' => 'required|string',
        'end_time_date' => 'required',
        'end_time' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
