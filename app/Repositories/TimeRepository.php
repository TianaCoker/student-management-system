<?php

namespace App\Repositories;

use App\Models\Time;
use App\Repositories\BaseRepository;

class TimeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Time::class;
    }
}
