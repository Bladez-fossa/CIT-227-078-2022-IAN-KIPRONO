<?php

/*Write a code to check an integer number entered by user is Even or Odd using Conditional 
operator statement. */
if($_SERVER["REQUEST_METHOD"] == "POST"){
$number=intval($_POST["num"]);
$result=($number%2==0)?"Even":"Odd";
echo "<h2>Result: The number is " . htmlspecialchars($result) . "</h2>";

}
?>