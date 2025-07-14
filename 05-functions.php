<?php
function add($a, $b)
{
    return $a  + $b;
}

$sum = add(5, 5);

$subtract = fn($a, $b) => $a - $b;

$difference = $subtract(5, 5);

echo $sum, $difference;
