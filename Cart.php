<?php
require_once 'Product.php';
class Cart
{
    // protected Product $product;
    protected $cart = [];

    // public function __construct(Product $product)
    // {
    //     $this->product = $product;
    // }
    public function add($product)
    {
        return $this->cart[] = $product;
    }

    public function remove($product)
    {
        if (($product = array_search($product, $this->cart)) !== false) {
            unset($this->cart[$product]);
        } else {
            return 'Product is not found on the cart and cannot be removed.';
        }

        return $this->cart;
    }

    public function getTotalPrice()
    {
        $price = 0;
        foreach($this->cart as $_cart){
            $price += $_cart->price;
        }
        return "Total Price of all the products in this cart is : \${$price}";
    }

    public function clearAll()
    {
        if($this->cart === NULL){
            return 'The cart is empty';
        }else {
            unset($this->cart);
        }
    }

}