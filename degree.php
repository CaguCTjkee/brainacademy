<?php

/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 6/2/17
 * Time: 18:52
 */

function degree($x, $y)
{
    echo '$x: ' . $x . "<br>" . PHP_EOL;
    echo '$y: ' . $y . "<br>" . PHP_EOL;

    if( $y )
    {
        $z = $x * degree($x, --$y);
        echo '$z: ' . $z . "<br>" . PHP_EOL;

        return $z;
    }

    return 1;
}

echo degree(2, 4);