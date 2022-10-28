<?php

namespace App\Repositories;

use App\Models\Batch;
use App\Repositories\BaseRepository;

class BatchRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'batch'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Batch::class;
    }
}
