<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\BaseRepository;

class AppointmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'creator_id',
        'other_id',
        'date',
        'hour',
        'date_time',
        'is_confirmed',
        'is_report',
        'report_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Appointment::class;
    }
}
