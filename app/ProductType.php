<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "product_type";
    public $timestamps = false;

    public function catalogs(){
        return $this->hasMany('App\Catalog','id_type','id');
    }

}
