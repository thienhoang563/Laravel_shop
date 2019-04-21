<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'  => 'Field name can not be null.',
            'email.required'  => 'Field email can not be null.',
            'email.email'  => 'Email not validated.',
            'email.unique'  => 'Email used.',
            'phone.required'  => 'Field phone can not be null.',
        ];
    }

}
