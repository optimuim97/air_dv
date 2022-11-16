<?php

namespace App\Repositories;

use App\Models\Currency;
use App\Repositories\BaseRepository;

class CurrencyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'country_code',
        'dial_code'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Currency::class;
    }
}
