<?php
$weeklyHomework = array(
  array("problem" => "2x + 3", "answer" => 5),
  array("problem" => "5x - 2", "answer" => 17),
  array("problem" => "3x + 2", "answer" => 11)
);
$randomIndex = rand(0, count($weeklyHomework)-1);
return $weeklyHomework[$randomIndex];
?>
