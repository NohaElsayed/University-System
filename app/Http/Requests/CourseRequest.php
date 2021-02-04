<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        return [
            'name'=>'required|unique:courses,name',
            'email'=>'required|unique:courses,name',
            'prof_name'=>'required',
            'year'=>'required',
            'photo'=>'required',
            'details'=>'required',

        ];
    }
    public function  messages()
    { return [
        'name.required' => 'Course Name filed is required.',
        'name.unique' => 'Course Name is token',
        'email.required' =>'Email must be number',
        'prof_name.required' =>'Prof_name feild is required',
        'year.required' =>'year of study feild is required',
        'photo.required' => 'photo filed is required.',
        'details.required' => 'details filed is required.',
    ];
    }
}
