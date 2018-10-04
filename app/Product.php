<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function promotions(){
        return $this->belongsTo('App\Promotion','id_promo','id');
    }

    public function feedbacks(){
        return $this->hasMany('App\Feedback','id_product','id');
    }

    public function product_video(){
        return $this->hasMany('App\ProductVideo','id_product','id');
    }

    public function product_color(){
        return $this->hasMany('App\ProductColor','id_product','id');
    }

    public function bill_detail(){
        return $this->belongsTo('App\BillDetail','id_product','id');
    }

    public function product_image(){
        return $this->hasManyThrough('App\ProductImage','App\ProductColor','id_product','id_color','id','id');
    }
}
