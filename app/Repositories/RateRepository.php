<?php

namespace App\Repositories;

use App\Models\Rate;
use App\Repositories\BaseRepository;

class RateRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'service_id',
        'prix',
        'currency_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Rate::class;
    }
}
