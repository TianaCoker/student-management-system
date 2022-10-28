<?php

namespace App\Http\Requests;

use App\Models\ClassAssigning;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassAssigningRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = ClassAssigning::$rules;
        
        return $rules;
    }
}
