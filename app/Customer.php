<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    public $timestamps = false;

    public function users(){
        return $this->belongsTo('App\User','id_user','id');
    }

    public function feedbacks(){
        return $this->hasMany('App\Feedback','id_customer','id');
    }

    public function bills(){
        return $this->hasMany('App\Bill','id_customer','id');
    }

}
