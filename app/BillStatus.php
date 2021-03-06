<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillStatus extends Model
{
    protected $table = "bill_status";
    public $timestamps = false;

    public function bills(){
        return $this->hasMany('App\Bill','id_status','id');
    }

}
