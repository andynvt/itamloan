<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function customers(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }

    public function bill_status(){
        return $this->belongsTo('App\BillStatus','id_status','id');
    }

    public function payments(){
        return $this->belongsTo('App\Payment','id_payment','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

}
