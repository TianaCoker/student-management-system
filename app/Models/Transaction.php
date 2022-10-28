<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $table = 'transactions';

    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid_id',
        'transaction_date',
        'remark',
        'description'
    ];

    protected $casts = [
        'transaction_date' => 'date',
        'remark' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid_id' => 'required',
        'transaction_date' => 'required',
        'remark' => 'required|string',
        'description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
