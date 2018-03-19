# php-programs
<?php
setcookie('marks',45,time()+(60*60*24*7));
echo "hello";
?>
<?php
function sum($a,$b)
{
	$sum=$a+$b;
	return $sum;
}
?>
<?php
$c=sum(1,3);
echo "sum is ".$c;
?>


