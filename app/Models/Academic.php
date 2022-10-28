<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public $table = 'academics';

    public $fillable = [
        'academic_year'
    ];

    protected $casts = [
        'academic_year' => 'string'
    ];

    public static $rules = [
        'academic_year' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
