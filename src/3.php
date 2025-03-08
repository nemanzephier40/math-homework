  <?php
$num1 = rand(0, 10);
$num2 = rand(0, 10);
echo "What is $num1 + $num2?";
$answer = trim(fgets(STDIN));
if ($answer == $num1 + $num2) {
    echo "Correct!";
} else {
    echo "Incorrect. The answer is $num1 + $num2 = ".($num1 + $num2);
}
?>