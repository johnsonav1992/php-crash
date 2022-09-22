<?php

date_default_timezone_set('UTC');
$timestamp = time();

$day_of_month = date('j', $timestamp);
$third_monday = new DateTime('third monday of this month');
$monday_digit = $third_monday->format('d');

echo $monday_digit + 6;

if ($day_of_month >= $monday_digit && $day_of_month <= $monday_digit + 6) {
    echo "Happy National Coding week!!";
} else {
    echo "Coding is always awesome, no matter what week it is!";
}

?>
