<?php

namespace App\Repositories;

use App\Models\AdresseHome;
use App\Repositories\BaseRepository;

class AdresseHomeRepository extends BaseRepository
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
        return AdresseHome::class;
    }
}
