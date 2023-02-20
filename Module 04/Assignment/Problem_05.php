<?php
// Write a PHP function to find the second largest number in an array of numbers.
function findSecondMax(array $arr) {
  //If array is empty then return
  if(empty($arr)) {
    return;
  }
  
  $max = PHP_INT_MIN;
  $secondMax = PHP_INT_MIN;
  
  //Traverse an array
  foreach($arr as $number) {
    //If it's greater than the value of max
    if($number > $max) {
      $secondMax = $max;
      $max = $number;
    }
    
    //If array number is greater than secondMax and less than max
    if($number > $secondMax && $number < $max) {
        $secondMax = $number;
     }
  }
  
  return $secondMax;
}

// Test Code
$arr = array(10,20,50,80,90);

echo $second_maximum = findSecondMax($arr);

?>
