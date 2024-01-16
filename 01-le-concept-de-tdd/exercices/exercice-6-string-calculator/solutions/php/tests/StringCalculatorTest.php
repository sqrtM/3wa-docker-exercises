<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\StringCalculator;

#[Attributes\CoversClass(StringCalculator::class)]
class StringCalculatorTest extends TestCase
{
    public function testEmptyStringShouldReturnZero()
    {
        $this->assertEquals(0, StringCalculator::add(""));
    }

    public function testSingleNumberShouldReturnTheNumber()
    {
        $this->assertEquals(5, StringCalculator::add("5"));
    }

    public function testTwoNumbersSeparatedByCommaShouldReturnTheirSum()
    {
        $this->assertEquals(10, StringCalculator::add("2,3\n5"));
    }

    public function testNumbersSeparatedByNewlineShouldReturnTheirSum()
    {
        $this->assertEquals(5, StringCalculator::add("2\n3"));
    }

    public function testSupportDifferentDelimiters()
    {
        $this->assertEquals(5, StringCalculator::add("//;\n2;3"));
    }
}
