 <?php 
$x = $_POST['x']; //x is the input value
if ($x == "") {
echo "Please enter a valid number"; // checks if x is empty
} else {
$y = $_POST['y']; // y is the input value
if ($y == "") {
echo "Please enter a valid number"; // checks if y is empty
} else {
$sum = $x + $y; // sums up x and y
echo "The sum of the two numbers is: ".$sum; // outputs the sum
}}?>