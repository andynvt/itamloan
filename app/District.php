<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "districts";
    public $timestamps = false;

    public function cities(){
        return $this->belongsTo('App\City','id_city','id');
    }
    public function towns(){
        return $this->hasMany('App\Town','id_district','id');
    }
}
