<?php
// Write a PHP function to sort an array of strings by their length, in ascending order. 

  $numbers = array(45, 16, 4, 32, 13);

  sort($numbers);  

  $arrlength = count($numbers);

  for($x = 0; $x < $arrlength; $x++){
    echo $numbers[$x].' ';
  }
?>
