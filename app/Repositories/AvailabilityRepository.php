<?php

namespace App\Repositories;

use App\Models\Availability;
use App\Repositories\BaseRepository;

class AvailabilityRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'start_date',
        'end_date',
        'start_time_date',
        'start_time',
        'end_time_date',
        'end_time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Availability::class;
    }
}
