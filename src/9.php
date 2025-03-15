
<?php
$math_problems = array(
  '2 + 2',
  '5 x 3',
  '10 - 4',
  '8 / 2'
);
$random_index = rand(0, count($math_problems) - 1);
echo $math_problems[$random_index];
?>