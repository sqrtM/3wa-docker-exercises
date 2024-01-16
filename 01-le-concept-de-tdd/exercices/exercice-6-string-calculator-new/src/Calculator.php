<?php

namespace App;

class Calculator
{
    public static function add(string $numbers): int
    {
        if (empty($numbers)) {
            return 0;
        }

        preg_match('/\/\/(.+)\n(.*+)/', $numbers, $matches);
        $delimiter = sprintf("/[\\n%s]/", $matches[1] ?? ',');
        $numbers = $matches[2] ?? $numbers;

        if (str_ends_with($numbers, ',')) {
            throw new \Exception('La chaîne ne peut pas finir par un délimiteur.');
        }
        $numbers = preg_split($delimiter, $numbers);

        $total = 0;
        $negativeNumbers = [];
        foreach ($numbers as $number) {
            if ((int) $number * -1 > 0) {
                $negativeNumbers[] = $number;
                continue;
            }

            $total += (int) $number;
        }

        if (!empty($negativeNumbers)) {
            throw new \Exception(sprintf('Negative number(s) not allowed : %s', implode(', ', $negativeNumbers)));
        }

        return $total;
    }
}
