<?php

namespace App\Repositories;

use App\Models\Admission;
use App\Repositories\BaseRepository;

class AdmissionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Admission::class;
    }
}
