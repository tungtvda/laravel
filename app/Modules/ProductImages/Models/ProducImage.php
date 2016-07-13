<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducImage extends Model
{
    //
    protected $fillable=['id','image','product_id'];
    public $timestamps=false;
    public function product(){
        return $this->belongsTo('\App\Modules\Products\Product');
    }
}
