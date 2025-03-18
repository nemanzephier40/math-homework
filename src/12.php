  <?php
function getRandomMathHomeworkAssignment() {
    // Generate a random problem based on the user's level of math comfort
    $level = mt_rand(1, 5);
    switch ($level) {
        case 1:
            return "Find the value of x in the equation: 2x + 5 = 11";
        case 2:
            return "Solve for y in the equation: 3y - 2 = 17";
        case 3:
            return "Simplify the expression: (2x^2 + 3x - 1) / (x + 1)";
        case 4:
            return "Find the area of a circle with a radius of 5 cm.";
        case 5:
            return "Determine if the following statement is true or false: The square root of 8 is greater than the cube root of 64.";
    }
}
?>