<?php

namespace App;

class Shoppingbasket{
    public $items;
    public $totalQuantity = 0;
    public $priceInTotal = 0;


    public function __construct($oldShoppingBasket)
    {
        if($oldShoppingBasket){
            $this->items = $oldShoppingBasket->items;
            $this->totalQuantity = $oldShoppingBasket->totalQuantity;
            $this->priceInTotal = $oldShoppingBasket->priceInTotal;
        }else{
            $this->items = null;
        }
    }

    public function addItem($item, $id){
        $itemWrapper = ['quantity' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $itemWrapper = $this->items[$id];
            }
        }
        $itemWrapper['quantity']++;
        $itemWrapper['price'] = $item->price * $itemWrapper['quantity'];
        $this->items[$id] = $itemWrapper;
        $this->totalQuantity++;
        if($this->totalQuantity > 0 && $this->totalQuantity < 2){
            $this->totalQuantity++;
        }
        $this->priceInTotal += $item->price;
        if($this->priceInTotal > 20){
            $this->priceInTotal += $item->price;
            $this->priceInTotal -= ($this->priceInTotal * 0.20);
        }
        $this->priceInTotal -= ($this->priceInTotal * 0.02);
    }

    public function reduceItems(){
        $this->totalQuantity--;
    }
}