<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $table = 'classes';

    public $fillable = [
        'class_name',
        'class_code'
    ];

    protected $casts = [
        'class_name' => 'string',
        'class_code' => 'string'
    ];

    public static $rules = [
        'class_name' => 'required|string',
        'class_code' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
