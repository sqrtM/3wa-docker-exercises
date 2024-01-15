<?php

namespace App\Tests;

// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;

use App\Message;

class MessageTest extends TestCase
{
    protected Message $message;
    protected $array = [];

    public function setUp(): void
    {
        $this->message = new Message($_ENV['LANGUAGE'] ?? 'en');
        // $this->array = [];
        var_dump($this->array); 
    }

    public function tearDown():void
    {
        var_dump("FERMETURE DE LA RESSOURCE");
    }

    public function testIfExistEnv()
    {
        $this->array[] = 2;
        $this->assertTrue(isset($_ENV['LANGUAGE']));

        $this->message->add(1);
    }

    public function testVariableEnv()
    {
        $this->array[] = 3;
        $this->message->add(2);

        $this->assertContains($_ENV['LANGUAGE'], ['fr', 'en']);
    }

    public function testTranslateEnv()
    {
        $this->array[] = 4;
        $this->message->add(3);

        $this->message->setLang('en');
        $this->assertSame("Hello World!",$this->message->get());

        $this->message->setLang('fr');
        $this->assertSame("Bonjour tout le monde!",$this->message->get());
        var_dump($this->message->getArray()); 
    }

}
