<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $table = 'levels';

    public $fillable = [
        'level',
        'level_description',
        'course_id'
    ];

    protected $casts = [
        'level' => 'string',
        'level_description' => 'string'
    ];

    public static $rules = [
        'level' => 'required|string',
        'level_description' => 'required|string',
        'course_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
