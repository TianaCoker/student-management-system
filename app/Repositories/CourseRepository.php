<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'course_name',
        'course_code',
        'course_description',
        'course_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Course::class;
    }
}
