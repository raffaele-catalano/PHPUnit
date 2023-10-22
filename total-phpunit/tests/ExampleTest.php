<?php

class ExampleTest extends \PHPUnit\Framework\TestCase {

    public function testTwoStringsAreTheSame() {
        $s1 = 'colloquio Interlogica';
        $s2 = 'colloquio Interlogica';

        // assertSame controlla che il contenuto sia il medesimo, in quanto metodo
        // pretende che gli vengano passati i parametri da testare
        $this->assertSame($s1, $s2);
        // assertTrue controlla che l'istruzione che gli passiamo sia vera,
        // in questo caso che $s1 sia uguale a $s2
        $this->assertTrue($s1 == $s2);
        // in questo ↓ caso, chiaramente, il test fallirà
        // $this->assertTrue($s1 != $s2);
    }


    public function testProductIsCalculatedCorrectly() {
        require 'src/ExampleFunctions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }

}