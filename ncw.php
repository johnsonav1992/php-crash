<?php

date_default_timezone_set('UTC');
$timestamp = time();

$month = intval(date('m'));
$september = boolval($month === 9);
$day_of_month = date('j', $timestamp);
$third_monday = new DateTime('third monday of this month');
$monday_digit = $third_monday->format('d');

if ($september && $day_of_month >= $monday_digit && $day_of_month <= $monday_digit + 6) {
    echo "Happy National Coding Week!!";
} else {
    echo "Coding is always awesome, no matter what week it is!";
}

?>
