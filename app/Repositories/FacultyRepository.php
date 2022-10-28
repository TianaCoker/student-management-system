<?php

namespace App\Repositories;

use App\Models\Faculty;
use App\Repositories\BaseRepository;

class FacultyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Faculty::class;
    }
}
