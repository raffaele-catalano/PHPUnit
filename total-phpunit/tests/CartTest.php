<?php

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testNetPriceIsCalculatedCorrectly()
    {
        // fase 1 - Setup
        require 'src/Cart.php';
        
        $cart = new Cart();
        $cart->price = 10;

        // fase 2 - Do Something
        $netPrice = $cart->getNetPrice();

        // fase 3 - Make Assertion
        $this->assertEquals(12, $netPrice);
    }
}