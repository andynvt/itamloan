<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = "promotions";
    protected $dates = [
        'created_at',
        'updated_at',
        'start_date',
        'end_date',
    ];

    public function products(){
        return $this->hasMany('App\Product','id_promo','id');
    }
}
