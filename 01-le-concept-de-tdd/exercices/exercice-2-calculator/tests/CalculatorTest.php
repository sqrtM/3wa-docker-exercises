<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

#[Attributes\CoversClass(Calculator::class)]
class CalculatorTest extends TestCase
{
    use Providers\TraitProvider;

    protected Calculator $calculator;

    public function setUp(): void
    {
        $this->calculator = new Calculator($_ENV['PRECISION'] ?? 2);
    }

    public function testPrecision(): void
    {
        $this->assertEquals($_ENV['PRECISION'] , $this->calculator->getPrecision());
    }
    public function testInstanceOfCalculator(): void
    {
        $this->assertInstanceOf(Calculator::class, $this->calculator);
    }

    #[Attributes\DataProvider('additionEqualsProvider')]
    public function testAdd($a, $b, $expected): void
    {

        $this->assertEquals($expected, $this->calculator->add($a, $b));
    }

    #[Attributes\DataProvider('additionSameProvider')]
    public function testSameAdd($a, $b, $expected): void
    {

        $this->assertSame($expected, $this->calculator->add($a, $b));
    }

    #[Attributes\DataProvider('divisorEqualsProvider')]
    public function testEqualsDivisor($a, $b, $expected): void
    {
        $this->assertEquals($expected, $this->calculator->division($a, $b));
       
    }

    #[Attributes\DataProvider('divisorSameProvider')]
    public function testSameDivisor($a, $b, $expected): void
    {
        $this->assertSame($expected, $this->calculator->division($a, $b));
    }

    public function testExceptionDivision(): void
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calculator->division(3, 0);
    }

    public function testExceptionMessaheDivision(): void
    {
        $this->expectExceptionMessage("Impossible de diviser par zéro");
        $this->calculator->division(3, 0);
    }
}
