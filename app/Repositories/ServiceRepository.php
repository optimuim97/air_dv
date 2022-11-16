<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'catalog_id',
        'service_type_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Service::class;
    }
}
