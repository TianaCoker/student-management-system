<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $table = 'attendances';

    public $fillable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
    ];

    protected $casts = [
        'attendance_status' => 'boolean'
    ];

    public static $rules = [
        'student_id' => 'required',
        'class_id' => 'required',
        'subject_id' => 'required',
        'teacher_id' => 'required',
        'attendance_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
