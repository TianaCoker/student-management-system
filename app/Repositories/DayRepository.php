<?php

namespace App\Repositories;

use App\Models\Day;
use App\Repositories\BaseRepository;

class DayRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'day'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Day::class;
    }
}
