<?php
define("EMPCODE", 001);
define("EMPNAME", "ABC");
define("EMPSALARY", 25000);
define("WORKHRS", 7.5);
echo("Employee Code is " . sprintf("%03d",EMPCODE));
echo("<br>");
echo("Employee Name is " . EMPNAME);
echo("<br>");
echo("Employee Salary is " . EMPSALARY);
echo("<br>");
echo("Working Hours is " . WORKHRS);
echo("<br>");

//USING VARIABLES
$empCode = sprintf("%03d", EMPCODE);
$empName = "ABC";
$empSalary = 25000;
$workHrs = 7.5;
echo("Employee Code is " . $empCode);
echo("<br>");
echo("Employee Name is " . $empName);
echo("<br>");
echo("Employee Salary is " . $empSalary);
echo("<br>");
echo("Working Hours is " . $workHrs);
echo("<br>");
?>

