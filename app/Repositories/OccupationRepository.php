<?php

namespace App\Repositories;

use App\Models\Occupation;
use App\Repositories\BaseRepository;

class OccupationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'years'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Occupation::class;
    }
}
