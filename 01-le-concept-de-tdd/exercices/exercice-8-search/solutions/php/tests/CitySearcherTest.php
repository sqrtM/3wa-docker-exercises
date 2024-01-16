<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes;

use App\CitySearcher;

#[Attributes\CoversClass(CitySearcher::class)]
class CitySearcherTest extends TestCase {
    public function testLessThan2Characters() {
        $this->assertEquals([], CitySearcher::search(''));
        $this->assertEquals([], CitySearcher::search('a'));
        $this->assertEquals([], CitySearcher::search('1'));
    }

    public function testExactSearch() {
        $this->assertEquals(["Valence", "Vancouver"], CitySearcher::search("Va"));
        $this->assertEquals(["Budapest", "Istanbul"], CitySearcher::search("Bu"));
        $this->assertEquals(["New York City"], CitySearcher::search("New York"));
    }

    public function testCaseInsensitiveSearch() {
        $this->assertEquals(["Valence", "Vancouver"], CitySearcher::search("va"));
        $this->assertEquals(["Budapest", "Istanbul"], CitySearcher::search("bU"));
    }

    public function testPartialSearch() {
        $this->assertEquals(["Budapest"], CitySearcher::search("ape"));
        $this->assertEquals(["Hong Kong"], CitySearcher::search("kong"));
        $this->assertEquals([], CitySearcher::search("xyz"));
    }

    public function testSearchAllCities() {
        $this->assertEquals(CitySearcher::$cityDatabase, CitySearcher::search("*"));
    }
}
