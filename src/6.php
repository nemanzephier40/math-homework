
<?php

$problems = array(
    "What is 2+2?",
    "What is 5-3?",
    "What is 10x6?"
);

shuffle($problems);

$output = '<table><tr><th>Math Problems</th><th>Answers</th></tr>';

foreach ($problems as $key => $value) {
    $output .= "<tr><td>" . $value . "</td><td><input type='text' name='ans" . ($key + 1) . "'/></td></tr>";
}

$output .= '</table>';

echo $output;

?>