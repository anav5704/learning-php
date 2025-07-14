<?php
$fruits = ["Apple", "Banana"];

echo count($fruits);

echo in_array("Apple", $fruits);

array_push($fruits, "Pear", "Pineapple");

array_pop($fruits);

print_r($fruits);

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$array3 = [...$array1, ...$array2];

array_map(function ($number) {
    echo $number;
}, $array3);
