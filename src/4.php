  <?php
$math_homework = array(
array("question" => "What is 2 + 2?", "answer" => "4"),
array("question" => "What is 5 x 3?", "answer" => "15"),
array("question" => "What is 7 - 2?", "answer" => "5"),
array("question" => "What is 9 / 3?", "answer" => "3"),
array("question" => "What is 6 x 2?", "answer" => "12")
);
$random_index = rand(0, count($math_homework) - 1);
echo $math_homework[$random_index]["question"] . "\n";
?>