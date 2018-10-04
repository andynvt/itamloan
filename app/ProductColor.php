<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table = "product_color";
    public $timestamps = false;

    public function products(){
        return $this->belongsTo('App\Product','id_product','id');
    }

    public function product_image(){
        return $this->hasMany('App\ProductImage','id_color','id');
    }
}
