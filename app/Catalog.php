<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = "catalogs";
    public $timestamps = false;

    public function products(){
        return $this->hasMany('App\Product','id_catalog','id');
    }
    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }
}
