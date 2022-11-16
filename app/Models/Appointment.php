<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Appointment extends Model
{
    public static function boot(){
        parent::boot();

        static::creating(function($appointment){
            $appointment->unique_id = Str::uuid();
        });
    }

    public $table = 'appointments';

    public $fillable = [
        'creator_id',
        'other_id',
        'date',
        'hour',
        'date_time',
        'is_confirmed',
        'is_report',
        'report_date',
        'unique_id'
    ];

    protected $casts = [
        'date' => 'date',
        'date_time' => 'string',
        'is_confirmed' => 'boolean',
        'is_report' => 'boolean',
        'report_date' => 'datetime'
    ];

    public static $rules = [
        'creator_id' => 'nullable',
        'other_id' => 'nullable',
        'date' => 'required',
        'hour' => 'nullable',
        'date_time' => 'required',
        'is_confirmed' => 'nullable|boolean',
        'is_report' => 'nullable|boolean',
        'report_date' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
