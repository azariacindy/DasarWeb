<?php
// list of student grades
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// sort the grades in ascending order
sort($grades);

// remove the two lowest and two highest grades
$filtered_grades = array_slice($grades, 2, -2); // Slice to remove first 2 and last 2

// calculate the total sum of the remaining grades
$total_grades = array_sum($filtered_grades);

// output the result
echo "Total grades after ignoring the two highest and two lowest grades: " . $total_grades;
?>
