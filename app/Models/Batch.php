<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $table = 'batches';

    public $fillable = [
        'batch'
    ];

    protected $casts = [
        'batch' => 'string'
    ];

    public static $rules = [
        'batch' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
