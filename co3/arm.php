<?php
function isArmstrong($number){
$sum=0;
$temp=$number;
$num_digits=strlen($number);
while($temp!=0){
$digit=$temp%10;
$sum+=pow($digit,$num_digits);
$temp/=10;
}
return $sum==$number;
}
$num=1634;
if(isArmstrong($num)){
	echo"$num is armstrong number";
}
else{
	echo"$num is not an armstrong number";
}
?>