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
}
