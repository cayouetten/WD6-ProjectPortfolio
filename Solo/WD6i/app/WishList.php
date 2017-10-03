<?php

namespace App;

class WishList{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldWishList){
        if($oldWishList){
            $this->items = $oldWishList->items;
            $this->totalQty = $oldWishList->totalQty;
            $this->totalPrice = $oldWishList->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = [
            'qty' => 0,
            'price' => $item->price,
            'item' => $item
        ];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function remove($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
<<<<<<< HEAD
        $this->totalPrice -= $this->items[$id]['qty'];
=======
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }

    public function removeAllWishlistItem($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
>>>>>>> checkout
    }
}
