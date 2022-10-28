<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $table = 'shifts';

    public $fillable = [
        'shift'
    ];

    protected $casts = [
        'shift' => 'string'
    ];

    public static $rules = [
        'shift' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
