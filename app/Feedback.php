<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";

    public function products(){
        return $this->belongsTo('App\Product','id_product','id');
    }

    public function customers(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }
}
