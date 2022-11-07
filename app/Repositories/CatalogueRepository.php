<?php

namespace App\Repositories;

use App\Models\Catalogue;
use App\Repositories\BaseRepository;

class CatalogueRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Catalogue::class;
    }
}
