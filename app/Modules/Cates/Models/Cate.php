<?php

namespace App\Modules\Cates\Models;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $fillable=['id','name','alias','order','parent_id','keywords','description'];
    public $timestamps=false;
    public function products(){
        return $this->hasMany('\App\Modules\Products\Product');
    }
    public function CheckFill(){
        return ['name','alias','order','parent_id','keywords','description'];
    }
    public function getByAll($condition,$value,$field_order,$order, $start, $limit)
    {
        return Cate::select('id', 'name', 'alias', 'order', 'parent_id as parentId', 'keywords', 'description')->take($limit)->skip($start)->whereRaw($condition, $value)->orderBy($field_order,$order)->get()->toArray();
    }
}
