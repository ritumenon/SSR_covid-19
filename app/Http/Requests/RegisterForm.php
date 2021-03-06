<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterForm extends FormRequest
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
            'email'         =>  'required|email|unique:users',
            'mobile'        =>  'required|digits:10|unique:users',
            'password'      =>  'required|min:8',
            'address'    =>  'required',
            'pincode'     =>  'required|digits:10',
            'name'   => 'required|alpha',
        ];
    }
}
