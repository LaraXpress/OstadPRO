<?php
// Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$array = array(
    'key1' => 'Instructory',
    'key2' => 'Ostad Platform',
    'key3' => 'Bohubrihi'
);

$count = 1;
foreach ($array as $k => $v) {
  if ($count == 1)
    $first[$k] = $v;
  if ($count == count($array))
    $last[$k] = $v;
    $count++;
}
array_shift($array);
array_pop($array);
$final = array_merge($array);
print_r($final)

?>
