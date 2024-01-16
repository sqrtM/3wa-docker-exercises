<?php

namespace App\Tests;

use App\FiboYield;
use PHPUnit\Framework\TestCase;
use Providers\TraitsNumbersFibonacci;

#[Attributes\CoversClass(FiboYield::class)]
class FiboYieldTest extends TestCase
{
    protected FiboYield $fibo;
    use Providers\TraitsNumbersFibonacci;

    public function setUp(): void
    {
        $this->fibo = new FiboYield();
    }

    public function testFirstsYieldTermSuite()
    {
        // assignation des valeurs nouvelle syntaxe PHP

        $this->assertEquals(1, $this->fibo->run()->current());
    }

    public function testConsecutiveYieldTermSuite()
    {
        $numbers = [1, 1, 2, 3, 5];
        $gen = $this->fibo->run();

        $this->assertEquals(1, $gen->current());
        $gen->next();
        $this->assertEquals(1, $gen->current());
        $gen->next();
        $this->assertEquals(2, $gen->current());
        $gen->next();
        $this->assertEquals(3, $gen->current());
        $gen->next();
        $this->assertEquals(5, $gen->current());
    }
}
