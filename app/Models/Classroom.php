<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public $table = 'classrooms';

    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    protected $casts = [
        'classroom_name' => 'string',
        'classroom_code' => 'string',
        'classroom_description' => 'string',
        'classroom_status' => 'boolean'
    ];

    public static $rules = [
        'classroom_name' => 'required|string',
        'classroom_code' => 'required|string',
        'classroom_description' => 'required|string',
        'classroom_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
