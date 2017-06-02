<?php

require_once 'settings.php';

$do = !empty($_GET['do']) ? $_GET['do'] : 'oldstuff';

if( !empty($do) )
{
    $ext = '.php';
    $file = __DIR__ . '/' . $do . $ext;
    if( is_file($file) )
    {
        require_once $file;
    }
    else
        echo 'File "' . $file . '" not found';
}