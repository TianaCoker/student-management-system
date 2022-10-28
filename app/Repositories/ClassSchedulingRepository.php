<?php

namespace App\Repositories;

use App\Models\ClassScheduling;
use App\Repositories\BaseRepository;

class ClassSchedulingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'teacher_id',
        'semester_id',
        'start_time',
        'end_time',
        'schedule_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ClassScheduling::class;
    }
}
