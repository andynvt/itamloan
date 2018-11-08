<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "towns";
    public $timestamps = false;

    public function cities(){
        return $this->belongsTo('App\District','id_district','id');
    }
}
