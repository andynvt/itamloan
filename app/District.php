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
}
