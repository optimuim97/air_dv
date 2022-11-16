<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Availability extends Model
{
    public $table = 'availabilities';

    public static function boot(){
        parent::boot();
        static::creating(
            function($availability){
                $availability->unique_code = Str::uuid();
            }
        );
    }

    public $fillable = [
        'start_date',
        'end_date',
        'start_time_date',
        'start_time',
        'end_time_date',
        'end_time',
        'unique_code'
    ];

    protected $casts = [
        'start_date' => 'string',
        'end_date' => 'string',
        'start_time_date' => 'datetime',
        'start_time' => 'string',
        'end_time_date' => 'datetime',
        'end_time' => 'string',
        'unique_code' => 'string',
    ];

    public static $rules = [
        'start_date' => 'required|string',
        'end_date' => 'required|string',
        'start_time_date' => 'required',
        'start_time' => 'required|string',
        'end_time_date' => 'required',
        'end_time' => 'required|string',
        'unique_code' => 'required|string|max:36',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
    
}
