<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    public $timestamps = false;

    public function bills(){
        return $this->hasMany('App\Bill','id_payment','id');
    }
}
