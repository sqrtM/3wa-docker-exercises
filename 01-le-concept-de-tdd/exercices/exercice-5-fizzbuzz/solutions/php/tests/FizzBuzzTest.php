<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\FizzBuzz;

#[Attributes\CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    protected FizzBuzz $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testIfMultipleOfThreeAndFive()
    {
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->getMultiple(15));
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->getMultiple(30));
    }

    public function testIfMultipleOfThree()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->getMultiple(3));
        $this->assertEquals("Fizz", $this->fizzBuzz->getMultiple(6));
        $this->assertEquals("Fizz", $this->fizzBuzz->getMultiple(9));
    }

    public function testIfMultipleOfFive()
    {
        $this->assertEquals("Buzz", $this->fizzBuzz->getMultiple(5));
        $this->assertEquals("Buzz", $this->fizzBuzz->getMultiple(10));
    }

    public function testWhenNoMultiple()
    {
        $this->assertEquals("1", $this->fizzBuzz->getMultiple(1));
        $this->assertEquals("19", $this->fizzBuzz->getMultiple(19));
    }
}
