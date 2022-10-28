<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;






class User extends Authenticatable
{
    public $table = 'users';

    public $fillable = [
        'name',
        'role',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    public static $rules = [
        'name' => 'required|string',
        'role' => 'required',
        'email' => 'required|string',
        'email_verified_at' => 'nullable',
        'password' => 'required|string',
        'remember_token' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
