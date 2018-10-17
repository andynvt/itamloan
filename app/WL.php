<?php

namespace App;

class WL
{
    public $items = null;
    public $totalQty = 0;

    public function __construct($oldWL){
        if($oldWL){
            $this->items = $oldWL->items;
            $this->totalQty = $oldWL->totalQty;
        }
    }

    public function add($item, $id, $price, $color, $image){
        $wl = ['qty'=>0, 'price' => $price, 'color' => $color, 'image' => $image ,'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $wl = $this->items[$id];
            }
        }
        $wl['qty']++;
        $this->items[$id] = $wl;
        $this->totalQty++;
    }

    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
