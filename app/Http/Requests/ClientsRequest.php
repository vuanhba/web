<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
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
            
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            
        ];
    }
    public function messages(){
        return [
            
            'email.required' => ':attribute bắt buộc phải nhập',
       

            'password.required' => ':attribute bắt buộc phải nhập',
           
           

        ];
    }
    public function attributes(){
        return [
            
            'email' => 'email',
            'password' => 'password',
            

        ];
    }

   
    
    
}
