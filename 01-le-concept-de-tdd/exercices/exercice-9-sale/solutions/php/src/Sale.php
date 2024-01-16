<?php

namespace App;

class Sale 
{
    // AJouter ici d'autres code barres et prix
    private static $productPrices = [
        '12345' => 7.25,
        '23456' => 12.50,
    ];

    private $command = [];

    public static function scan($barCode)
    {
        return isset(self::$productPrices[$barCode]) ? self::$productPrices[$barCode] : 'Erreur : code-barres non trouvé';
    }

    public function scanArticle($barCode)
    {
        $this->command[] = $barCode;
    }

    public function totalAmount()
    {
        $total = 0;
        foreach ($this->command as $barCode) {
            $total += self::scan($barCode);
        }
        return $total;
    }
}
