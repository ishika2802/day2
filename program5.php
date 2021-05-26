<?php

$num = 446;
$n = $num;
$reversenumber = 0;
while ($num!=0)
{
$reversenumber = $reversenumber*10+$num%10;
$num = (int)($num/10); 
}
if($reversenumber==$n)
{
echo"$n is Palindrome number";
}else{
echo"$n is not Palindrome number";
}

?>