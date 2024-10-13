<?php
/*
Write a code to calculate and print percentage of a student where, 
Total_Marks=400, Obtained_Marks=Sum of obtained marks of all 4 subjects 
Percentage= (Obtained_Marks*100)/Total_Marks. 
(Hint: input marks of four subjects out of 100). 
*/
$totalMarks=400;
$math=50;
$eng=60;
$music=90;
$geo=33;
$marks=$math+$eng+$music+$geo;
$percentageMarks=($marks*100)/$totalMarks;
echo"Percentage Mark is " .$percentageMarks;
?>