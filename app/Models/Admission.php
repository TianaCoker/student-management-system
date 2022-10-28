<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public $table = 'admissions';

    public $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'image'
    ];

    protected $casts = [
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'image' => 'string'
    ];

    public static $rules = [
        'roll_no' => 'required|string',
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'father_name' => 'required|string',
        'father_phone' => 'required|string',
        'mother_name' => 'required|string',
        'gender' => 'required|string',
        'email' => 'required|string',
        'dob' => 'required',
        'phone' => 'required|string',
        'address' => 'required|string',
        'current_address' => 'required|string',
        'nationality' => 'required|string',
        'passport' => 'required|string',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required',
        'class_id' => 'required',
        'image' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
