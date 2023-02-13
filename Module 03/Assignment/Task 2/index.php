<?php
// 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
$n   = 100;

for($i=1; $i <= $n; $i++)
{
    $sum = $sum + $i;
    if($i == $n)
    {
        echo $i;
    }
    else
    {
        echo $i . " + ";
    }
}
echo " = ".$sum."\n";
echo "The summation of the above series is : ". $sum;
?>
