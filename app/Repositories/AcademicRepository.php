<?php

namespace App\Repositories;

use App\Models\Academic;
use App\Repositories\BaseRepository;

class AcademicRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'academic_year'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Academic::class;
    }
}
