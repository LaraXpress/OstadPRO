<?php
// Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$fname = "";
$lname = "";
function getNames($fname,$lname){
  return $fname." ".strrev($fname);
}
echo getNames('Hasin','Hyder');
?>
