<?php

namespace App\Repositories;

use App\Models\AddressDesk;
use App\Repositories\BaseRepository;

class AddressDeskRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'lat',
        'lon',
        'adresse_name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return AddressDesk::class;
    }
}
