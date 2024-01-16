<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(0, Calculator::add(""));
        $this->assertEquals(1, Calculator::add("1"));
        $this->assertEquals(3, Calculator::add("1,2"));
        $this->assertEquals(45, Calculator::add("1,2,3,4,5,6,7,8,9"));
        $this->assertEquals(45, Calculator::add("1,2,3\n4,5,6\n7,8\n9"));
    }

    public function testFailWhenEndingByADelimiter()
    {
        $this->expectExceptionMessage('La chaîne ne peut pas finir par un délimiteur.');
        Calculator::add("1,2,3,4,5,6,7,8,9,");
    }

    public function testAddWithCustomDelimiter()
    {
        $this->assertEquals(3, Calculator::add("//;\n1;2"));
        $this->assertEquals(7, Calculator::add("//sep\n2sep5"));
    }

    public function testNegativeNumbers()
    {
        $this->expectExceptionMessage('Negative number(s) not allowed : -4, -9');
        Calculator::add("2,-4,-9");
    }
}
