<?php
// Write a PHP function to check if a string contains only letters and whitespace.
function getLetters($string){
  if(ctype_alpha($string))
    echo "Yes, Letters contains available!\n";
  else
    echo "Sorry, It's Empty Letter!\n";  
}

function getWhiteSpace($string){
  if (ctype_space($string)) {
    echo "Yes, It founds whitespace in anywhere \n";
   }else {
    echo "No, There is no whitespace here \n";
    }
  }

echo getLetters('SumonSarkar');
echo getWhiteSpace('Mazed');
?>
