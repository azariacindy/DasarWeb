<?php
$myArray = array(); // array empty
if (empty($myArray)) {
    echo "Array is empty";
} else {
    echo "Array is not empty";
}

echo "<br><br>";

if (empty($nonExistentVar)) {
    echo "Variable is empty";
} else {
    echo "Variable is not empty";
}
?>
