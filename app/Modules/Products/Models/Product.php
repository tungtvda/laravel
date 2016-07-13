<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['id','name','alias','price','intro','content','image','keywords','user_id','cate_id'];
    public $timestamps=false;
    public function cate(){
        return $this->belongsTo('\App\Modules\Cates\Cate');
    }
    public function user(){
        return $this->belongsTo('\App\Modules\Users\Users');
    }
    public function productImages(){
        return $this->hasMany('\App\Modules\ProductImages\ProductImage');
    }
}
