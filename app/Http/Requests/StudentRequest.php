<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'=>'required|unique:students,name',
            'email'=>'required|unique:students,name',
            'password'=>'required',
            'photo'=>'required',
            'phone'=>'required',

        ];
    }
    public function  messages()
    { return [
        'name.required' => 'Student Name filed is required.',
        'name.unique' => 'student Name is token',
        'email.required' =>'Email must be number',
        'email.unique' => 'student Email is token',
        'photo.required' => 'photo filed is required.',
        'password.required' => 'password filed is required.',
        'phone.required' =>'Phone feild is required',
    ];
    }
}
