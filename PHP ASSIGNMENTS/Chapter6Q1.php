<?php
/*Write a simple program to construct a Calculator that can perform Basic operation
Mathematical operation as well. */

$num1 = 0;
$num2 = 0;
$result = '';
$operation = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];

   
    if ($operation == 'add') {
        $result = $num1 + $num2;
    } elseif ($operation == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operation == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operation == 'divide') {
        if ($num2 == 0) {
            $result = "Error: Division by zero is not allowed.";
        } else {
            $result = $num1 / $num2;
        }
    } else {
        $result = "Error: Invalid operation.";
    }
}
?>