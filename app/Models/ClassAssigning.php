<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassAssigning extends Model
{
    public $table = 'class_assignings';

    public $fillable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
    ];

    protected $casts = [
        
    ];

    public static $rules = [
        'course_id' => 'required',
        'level_id' => 'required',
        'shift_id' => 'required',
        'classroom_id' => 'required',
        'batch_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
