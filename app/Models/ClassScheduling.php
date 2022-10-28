<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassScheduling extends Model
{
    public $table = 'class_schedulings';

    public $fillable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'teacher_id',
        'semester_id',
        'start_time',
        'end_time',
        'schedule_status'
    ];

    protected $casts = [
        'schedule_status' => 'boolean'
    ];

    public static $rules = [
        'course_id' => 'required',
        'level_id' => 'required',
        'shift_id' => 'required',
        'classroom_id' => 'required',
        'batch_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'teacher_id' => 'required',
        'semester_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'schedule_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
