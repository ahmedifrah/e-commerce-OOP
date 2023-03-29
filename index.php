<?php
require_once 'Cart.php';

$shoe = new Product(1, 'Shoe', 50.00);
$dress = new Product(2, 'Blue Dress', 90.00);
$socks = new Product(3, 'Patterned Socks', 12.00);

$cart = new Cart();
$cart->add($shoe);
$cart->add($dress);
$cart->add($socks);



var_dump($cart->clearAll());
print_r($cart);

$cart->add($dress);
$cart->add($socks);
print_r($cart);

echo($cart->getTotalPrice());

$cart->remove($dress);
print_r($cart);

echo($shoe->get_name());
echo($shoe->get_price());