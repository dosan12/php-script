<!DOCTYPE html>
<html>
<head>
    <title>PHP Add 10 Numbers</title>
</head>
<body>

<?php
// Function to add 10 numbers
function addTenNumbers($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

// Example array of 10 numbers
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Calculate the sum using the function
$sumResult = addTenNumbers($numbers);

// Display the result
echo "The sum of the 10 numbers is: $sumResult";
?>

</body>
</html>
