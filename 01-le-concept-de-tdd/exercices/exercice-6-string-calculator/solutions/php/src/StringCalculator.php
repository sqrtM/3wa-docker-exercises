<?php

namespace App;

class StringCalculator 
{
    public static function add($numbers) {
        if ($numbers === "") {
            return 0;
        }

        $delimiterRegex = "/[,\n]/";
        $nums = $numbers;

        if (strpos($numbers, "//") === 0) {
            $customDelimiter = $numbers[2];
            $delimiterRegex = "/$customDelimiter/";
            $nums = substr($numbers, 4);
        }

        $numberArray = preg_split($delimiterRegex, $nums);
        $sum = array_reduce($numberArray, function ($acc, $num) {
            return $acc + (int)$num;
        }, 0);

        return $sum;
    }
}
