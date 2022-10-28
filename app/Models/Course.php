<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = 'courses';

    public $fillable = [
        'course_name',
        'course_code',
        'course_description',
        'course_status'
    ];

    protected $casts = [
        'course_name' => 'string',
        'course_code' => 'string',
        'course_description' => 'string',
        'course_status' => 'boolean'
    ];

    public static $rules = [
        'course_name' => 'required|string',
        'course_code' => 'required|string',
        'course_description' => 'required|string',
        'course_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function levels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Level::class, 'course_id');
    }
}
