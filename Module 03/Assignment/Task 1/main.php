<?php
// Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
include('index.php');

// Check with an EVEN number
$number = 10;
if(isEvenOrODD($number))
  print_r($number." is EVEN number");
else
  print_r($number." is ODD number");
print_r("\n");

//Check with an ODD number
$number = 19;
if(isEvenOrODD($number))
  print_r($number." is EVEN number");
else
  print_r($number." is ODD number");    
?>
