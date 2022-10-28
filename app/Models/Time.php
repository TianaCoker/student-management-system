<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public $table = 'times';

    public $fillable = [
        'time'
    ];

    protected $casts = [
        'time' => 'string'
    ];

    public static $rules = [
        'time' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
