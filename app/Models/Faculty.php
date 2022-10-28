<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $table = 'faculties';

    public $fillable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    protected $casts = [
        'faculty_name' => 'string',
        'faculty_code' => 'string',
        'faculty_description' => 'string',
        'faculty_status' => 'boolean'
    ];

    public static $rules = [
        'faculty_name' => 'required|string',
        'faculty_code' => 'required|string',
        'faculty_description' => 'required|string',
        'faculty_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
