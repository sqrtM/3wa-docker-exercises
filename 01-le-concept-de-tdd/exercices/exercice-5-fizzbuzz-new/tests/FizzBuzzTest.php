<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attrbutes;
use App\FizzBuzz;

#[Attributes\CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    public function testGetMultiple()
    {
        $this->assertEquals("4", FizzBuzz::getMultiple(4));
    }

    public function testGetMultipleForMultipleOfThreeAndShouldReturnsFizz()
    {
        $this->assertEquals("Fizz", FizzBuzz::getMultiple(3));
        $this->assertEquals("Fizz", FizzBuzz::getMultiple(6));
        $this->assertEquals("Fizz", FizzBuzz::getMultiple(9));
    }

    public function testGetMultipleForMultipleOfFiveAndShouldReturnsBuzz()
    {
        $this->assertEquals("Buzz", FizzBuzz::getMultiple(5));
        $this->assertEquals("Buzz", FizzBuzz::getMultiple(10));
        $this->assertEquals("Buzz", FizzBuzz::getMultiple(20));
    }

    public function testGetMultipleForMultipleOfFiveAndThreeAndShouldReturnsBuzz()
    {
        $this->assertEquals("FizzBuzz", FizzBuzz::getMultiple(15));
        $this->assertEquals("FizzBuzz", FizzBuzz::getMultiple(30));
    }
}
