<?php
namespace App\Cart;
class CartItem{
    private $product;
    public $quantity;
  
    public function __construct($product, $quantity) {
      $this->product = $product;
      $this->quantity = $quantity;
    }
    

    public function getAmount(){
        return $this->product->getGia() * $this->quantity;
    }
    public function getProduct(){
        return $this->product;
    }
}