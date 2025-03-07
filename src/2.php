<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($numbers);
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo "The sum of the numbers is: " . $sum;
