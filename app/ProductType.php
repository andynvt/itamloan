<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "product_type";
    public $timestamps = false;

    public function products(){
        return $this->hasMany('App\Product','id_type','id');
    }

}
