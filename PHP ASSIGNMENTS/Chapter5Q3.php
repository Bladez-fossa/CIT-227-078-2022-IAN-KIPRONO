<?php
/*Write a code to input Temperature in Centigrade and convert to Fahrenheit.*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$celsius=$_POST["celcius"];
$fahrenheit=($celsius*9/5)+32;
echo"Temperature in fahrenheit: ".$fahrenheit."°F";

}
?>