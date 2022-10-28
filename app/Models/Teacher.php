<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = 'teachers';

    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'image'
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'image' => 'string'
    ];

    public static $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'gender' => 'required|string',
        'email' => 'required|string',
        'dob' => 'required',
        'phone' => 'required|string',
        'address' => 'required|string',
        'nationality' => 'required|string',
        'passport' => 'required|string',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required',
        'image' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
