<?php

namespace App\Repositories;

use App\Models\Level;
use App\Repositories\BaseRepository;

class LevelRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'level',
        'level_description',
        'course_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Level::class;
    }
}
