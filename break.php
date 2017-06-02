<?php
/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 6/2/17
 * Time: 20:57
 */

$counter = 5;

while( $counter > 0 )
{
    if( $counter < 3 )
        break;

    if( $counter === 4 )
    {
        --$counter;
        continue;
    }

    echo 'counter: ' . $counter . '<br>' . PHP_EOL;
    --$counter;
}