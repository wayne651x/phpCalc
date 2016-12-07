<?php
namespace phpCalc;

class CalculatorTest extends \PHPUnit_Framework_TestCase {
    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2, 2));
    }
}
