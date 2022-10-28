<?php

namespace App\Repositories;

use App\Models\Classroom;
use App\Repositories\BaseRepository;

class ClassroomRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Classroom::class;
    }
}
