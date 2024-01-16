<?php

namespace App;

class CitySearcher 
{
    public static $cityDatabase = [
        "Paris", "Budapest", "Skopje", "Rotterdam", "Valence", "Vancouver",
        "Amsterdam", "Vienne", "Sydney", "New York City", "Londres", "Bangkok",
        "Hong Kong", "Dubaï", "Rome", "Istanbul"
    ];

    public static function search($searchText) 
    {
        // Exigence 1
        if (strlen($searchText) < 2 && $searchText !== '*') {
            return [];
        }

        // Exigence 2, 3, 4, 5
        $searchText = strtolower($searchText);
        $matchingCities = [];

        foreach (self::$cityDatabase as $city) {
            $lowercaseCity = strtolower($city);

            if ($searchText === '*' || strpos($lowercaseCity, $searchText) !== false) {
                $matchingCities[] = $city;
            }
        }

        return $matchingCities;
    }
}
