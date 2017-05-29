<?php

require_once 'settings.php';

// functions
function test($par, $var)
{
    echo $par, $var;
}

function addFive(&$number)
{
    $number += 5;
}
// functions end


$x = 8.0 - 6.4;
$y = 1.6;

var_dump(round($x, 2) == round($y, 2)); // false

echo '<br>';

var_dump($x);

echo '<br>';

var_dump($y);

echo '<br>';

echo PHP_VERSION;

echo '<br>';

echo __LINE__;

echo '<br>';

var_dump(19 > 16 ?: 2);

echo '<br>';

test(1, 2, 3, 4, 5);

echo '<br>';

$number = 3;
addFive($number);
var_dump($number);

echo '<br>';

