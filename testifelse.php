<?php
/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 5/29/17
 * Time: 21:21
 */

if( isset($_GET['id']) )
{
    $id = $_GET['id'];

    if( is_numeric($id) )
    {
        if( !strstr($id, '.') )
        {
            echo 'id is integer';
        }
        else
            echo 'id is numeric';
    }
    else
        echo 'id is NOT numeric';
}
else
{
    echo 'id is not isset';
}