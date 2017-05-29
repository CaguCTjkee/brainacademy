<?php

require_once '../settings.php';

/**
 * Days checker
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 08.07.2016
 */

$dayId = isset($_GET['weekDay']) ? $_GET['weekDay'] : date('w');

switch( $dayId )
{
    case 1:
        echo 'It is Monday today';
        break;
    case 2:
        echo 'It is Tuesday today';
        break;
    case 3:
        echo 'It is Wednesday today';
        break;
    case 4:
        echo 'It is Thursday today';
        break;
    case 5:
        echo 'It is Friday today';
        break;
    case 6:
    case 7:
        echo 'Weekend!!!';
        break;
    default:
        echo 'Incorrect day';
}
