<?php

namespace App\Repositories;

use App\Models\Shift;
use App\Repositories\BaseRepository;

class ShiftRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'shift'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Shift::class;
    }
}
