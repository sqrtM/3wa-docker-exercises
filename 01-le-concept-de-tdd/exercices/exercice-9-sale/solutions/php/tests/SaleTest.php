<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\Sale;

#[Attributes\CoversClass(Sale::class)]
class SaleTest extends TestCase 
{
    public function testComputeCommand()
    {
        $sale = new Sale();
        $sale->scanArticle('12345');
        $sale->scanArticle('23456');

        $this->assertEquals(19.75, $sale->totalAmount());
    }
}
