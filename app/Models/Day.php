<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public $table = 'days';

    public $fillable = [
        'day'
    ];

    protected $casts = [
        'day' => 'string'
    ];

    public static $rules = [
        'day' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
