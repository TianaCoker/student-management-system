<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;

class TransactionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid_id',
        'transaction_date',
        'remark',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Transaction::class;
    }
}
