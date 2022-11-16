<?php

namespace App\Repositories;

use App\Models\Catalog;
use App\Repositories\BaseRepository;

class CatalogRepository extends BaseRepository
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
        return Catalog::class;
    }
}
