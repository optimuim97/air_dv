<?php

namespace App\Repositories;

use App\Models\CustomEvent;
use App\Repositories\BaseRepository;

class CustomEventRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'description',
        'image',
        'date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return CustomEvent::class;
    }
}
