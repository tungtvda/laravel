<?php

namespace App\Modules\Users\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    //
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'name'=>'required|min:10|max:100',
            'password'=>'required|min:10|max:20|confirmed',
            'email'=>'required|min:5|max:100|email|unique:users,email',
//            'pass'=>'required'
        ];
    }
    public function messages(){
       return [
           'name.required'=>'Bạn vui lòng nhập tên người dùng',
           'name.min'=>'Tên người dùng tối thiểu 10 ký tự',
           'name.max'=>'Tên người dùng tối đa 100 ký tự',
           'password.required'=>'Bạn vui lòng nhập mật khẩu',
           'password.min'=>'Mật khẩu tối thiểu 10 ký tự',
           'password.max'=>'Mật khẩu tối đa 20 ký tự',
           'password.confirmed'=>'Hai mật khẩu không khớp',
           'email.min'=>'Email tối thiểu 10 ký tự',
           'email.max'=>'Email tối đa 100 ký tự',
           'email.unique'=>'Email đã tồn tại trong hệ thống',
           'email.required'=>'Bạn vui lòng nhập email',
           'email.email'=>'Bạn vui lòng nhập đúng định dang email'
       ];
    }
}
