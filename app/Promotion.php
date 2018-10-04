<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = "promotions";

    public function products(){
        return $this->hasMany('App\Product','id_promo','id');
    }
}
