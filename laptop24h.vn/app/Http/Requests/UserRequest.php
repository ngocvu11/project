<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required',
          
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
        ];
    }
    public function messages(){
        return[
            'username.required'  => 'Vui lòng nhập tên người dùng !!!',
           
            'password.required' => 'Vui lòng nhập vào password !!!',
            
            
            'email.required' => 'Vui lòng nhập vào email !!!',
            'email.regex' => 'Đây không phải là email !!!'
        ];
    }
}
