<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

class TeacherRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Teacher::class;
    }
}
