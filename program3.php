<?php
$n1 = 407;
$sum = 0;
$n = $n1;
while($n!=0)
{
    $remainder = $n % 10;
    $sum = $sum+$remainder*$remainder*$remainder;
    $n = $n/10;
} 
if($n1==$sum){
    echo"armstrong number";
}else{
    echo"not armstrong number";
}
?>
