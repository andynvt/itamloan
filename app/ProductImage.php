<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = "product_image";
    public $timestamps = false;

    public function products(){
        return $this->belongsTo('App\ProductColor','id_color','id');
    }
}
