<?php

require_once '../settings.php';

/**
 * Days detector
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 07.07.2016
 */

$dayId = date('w');

if ($dayId <= 5) {
    $hour = (int)date('H');
    $workDayEndHour = 18;
    $workDayStartHour = 9;

    if ($workDayStartHour < $hour && $hour < $workDayEndHour) {
        $hoursToDayEnd = $workDayEndHour - $hour;
        echo 'Today you should work just ' . $hoursToDayEnd . ' hour(s)';
    } elseif ($workDayStartHour > $hour) {
        $hoursToWorkDayStart = $workDayStartHour - $hour;
        echo 'You should go to work after ' . $hoursToWorkDayStart . ' hour(s)';
    } elseif ($hour > $workDayEndHour) {
        $hoursAfterWork = $hour - $workDayEndHour;
        echo 'You should be at home ' . $hoursAfterWork . ' hour(s)';
    } else {
        echo 'Something is wrong with time';
    }
} else {
    echo 'Weekend!!!';
}
