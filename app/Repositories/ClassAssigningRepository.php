<?php

namespace App\Repositories;

use App\Models\ClassAssigning;
use App\Repositories\BaseRepository;

class ClassAssigningRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ClassAssigning::class;
    }
}
