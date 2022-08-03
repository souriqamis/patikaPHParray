<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function myFunction($array, $value)
{
    $filteredArray = array_filter($array);

    $rndmArray = array_rand($filteredArray, $value);

    $result = array_map(function ($array) use ($filteredArray) {
        return $filteredArray[$array];
    }, $rndmArray);

    return $result;
}

echo "<pre>";
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));