<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name'=>'required|unique:departments,name',
            'email'=>'required',
            'phone'=>'required',

        ];
    }
    public function  messages()
    { return [
        'name.required' => 'Department Name filed is required.',
        'name.unique' => 'Department Name is token',
        'email.required' =>'Email must be number',
        'email.unique' => 'Department Email is token',
        'phone.required' =>'Phone feild is required',
    ];
    }
}
