<?php
/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 6/2/17
 * Time: 19:11
 */

// functions
function test($par, $var)
{
    echo $par, $var;
}

// functions end

$x = 8.0 - 6.4;
$y = 1.6;

var_dump(round($x, 2) == round($y, 2)); // false

echo '<br>';

var_dump($x);

echo '<br>';

var_dump($y);

echo '<br> PHP VERSION: ';

echo PHP_VERSION;

echo '<br> Line is: ';

echo __LINE__;

echo '<br>';

var_dump(19 > 16 ?: 2);

echo '<br>';

test(1, 2, 3, 4, 5);

echo '<br>';

function addFive(&$number)
{
    $number += 5;
}

$number = 3;
addFive($number);
var_dump($number);

echo '<br><br> Test who is first:<br>';

function testEcho()
{
    echo 'This is will be first (echo): ' . func_num_args() . PHP_EOL;

    return 1;
}

echo 'This is will be second (return): ' . testEcho(1, 2, 3); // This is will be first (echo): 3 This is will be second (return): 1

echo '<br>';
