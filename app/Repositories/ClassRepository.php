<?php

namespace App\Repositories;

use App\Models\Classes;
use App\Repositories\BaseRepository;

class ClassRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'class_name',
        'class_code'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Classes::class;
    }
}