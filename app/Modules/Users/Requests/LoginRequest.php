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
            'user'=>'required|min:10|unique:users,email',
            'pass'=>'required'
        ];
    }
    public function messages(){
       return [
           'user.required'=>'Bạn vui lòng nhập username',
           'user.min'=>'username tối thiểu 3 ký tự',
           'user.unique'=>'Username đã tồn tại trong hệ thống',
           'pass.required'=>'Bạn vui lòng nhập mật khẩu'
       ];
    }
}
