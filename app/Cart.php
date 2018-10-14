<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $tax = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->tax = $oldCart->tax;
        }
    }

    public function addCartQty($item, $id, $price, $qty, $color, $image){
        $giohang = ['qty'=>$qty, 'price' => $price, 'color' => $color, 'image' => $image ,'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty'] += $qty;

        $this->items[$id] = $giohang;
        $this->totalQty += $qty;
        $this->totalPrice += $price;
        if($this->totalPrice < 500000){
            $tax = 100000;
        }else{
            $tax = 50000;
        }
        $this->tax = $tax;
    }

    public function add($item, $id, $price, $color, $image){
        $giohang = ['qty'=>0, 'price' => $price, 'color' => $color, 'image' => $image ,'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']++;

        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $price;
        if($this->totalPrice < 500000){
            $tax = 100000;
        }else{
            $tax = 50000;
        }
        $this->tax = $tax;
    }

    public function update($item, $ids, $sls)
    {
        $tempQty = 0;
        $tempPrice = 0;
//        dd($item);

        foreach ($ids as $i => $value){
            $giohang['qty'] = $sls[$i];
            $giohang['price'] = $this->items[$value]['price'];
            $giohang['color'] = $this->items[$value]['color'];
            $giohang['image'] = $this->items[$value]['image'];
            $giohang['item'] = $item[$i];
            $tempQty += $sls[$i];
            $tempPrice += $giohang['price'] * $sls[$i];

            $newcart[$value] = $giohang;
        }
        $this->items = $newcart;
        $this->totalQty = $tempQty;
        $this->totalPrice = $tempPrice;
    }

    //xóa 1
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }

    //xóa nhiều
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= ($this->items[$id]['price'] * $this->items[$id]['qty']);
        unset($this->items[$id]);
    }
}
