<?php

namespace App\Modules\Users\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
{
    //
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'password'=>'required',
            'email'=>'required|email',
        ];
    }
    public function messages(){
       return [
           'password.required'=>'Bạn vui lòng nhập mật khẩu',
           'email.required'=>'Bạn vui lòng nhập email',
           'email.email'=>'Bạn vui lòng nhập đúng định dang email'
       ];
    }
}
