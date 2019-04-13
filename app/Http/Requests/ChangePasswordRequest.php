<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//مش شرط يكون عامل تسجيل دخول
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'oldpassword' => 'required',
            'password' => 'required|min:4|confirmed',
        ];
    }
    public function messages()
    {
        return [
            "oldpassword.required"=>"Enter the current password",
                       "password.required"=>"Enter the new password",
                       "password.min"=>"Password should be at least 4 characters",
                       "password.confirmed"=>"password confirmation should match the new password"
        ];
    }
}
