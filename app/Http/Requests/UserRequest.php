<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|min:6',
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required|string|min:8',
            'id_role' => 'required',
        ];
    }
    public function messages(){
        return [
            'full_name.required' => ':attribute bắt buộc phải nhập',
            'full_name.min' => ':attribute phải lớn hơn 6 kí tự',
            'email.required' => ':attribute bắt buộc phải nhập',
            'email.unique' => ':attribute đã tồn tại',

            'password.required' => ':attribute bắt buộc phải nhập',
            'password.min' => ':attribute phải lớn hơn 8 kí tự',
            'id_role.required' => ':attribute bắt buộc phải nhập',


        ];
    }
    public function attributes(){
        return [
            'full_name' => 'full_name',
            'email' => 'email',
            'password' => 'password',
            'id_role' => 'id_role',

        ];
    }

   
    
    
}
