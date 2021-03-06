<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsEditRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'email',
            'mobile' => 'required|max:50',
            'img.*' => 'required|mimes:jpeg,jpg,png'
        ];
    }
    public function messages()
    {
        return [
             
        ];
    }
}
