<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    protected $table = "product_video";
    public $timestamps = false;

    public function products(){
        return $this->belongsTo('App\Product','id_product','id');
    }
}
