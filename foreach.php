<?php
/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 6/2/17
 * Time: 20:52
 */

$a = [1, 2, 3, 4];

foreach( $a as $k => $v )
{
    echo $k;
    echo '<br>' . PHP_EOL;
}
echo '<br>' . PHP_EOL;
echo $k;

echo '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;

$arr = [
    'abc' => 'my value',
    'def' => 'my value1',
    'bar' => 'my value2',
    'foo' => 'my value3',
    'foo' => 'my another value3',
];

foreach( $arr as $key => $val )
{
    $needle = '2';

    if( !stristr($val, $needle) )
    {
        continue;
    }

    echo 'key is ' . $key . '<br>' . PHP_EOL;
    echo $needle . ' is here!!!';
}
echo '<br>' . PHP_EOL;
echo '<br><pre>' . PHP_EOL;
var_dump($arr);
echo '</pre>' . PHP_EOL;
