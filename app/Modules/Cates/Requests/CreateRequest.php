<?php

namespace App\Modules\Cates\Requests;

use App\Http\Requests\Request;

class CreateRequest extends Request
{
    //
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'name'=>'required|max:255|unique:cates,name',
        ];
    }
    public function messages(){
       return [
           'name.max'=>'Tên loại tối đa 255 ký tự',
           'name.unique'=>'Tên loại đã tồn tại trong hệ thống',
           'name.required'=>'Bạn vui lòng nhập tên loại'
       ];
    }
}
