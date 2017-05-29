<?php

require_once 'settings.php';

//echo 'Hello world';

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


