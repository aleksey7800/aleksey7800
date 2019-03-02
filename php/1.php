<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

 $a = -10;
 $b = -8;

 if ($a>=0 && $b>=0) {
 	echo $a-$b;
 } elseif ($a<=0 && $b<=0) {
 	echo $a*$b;
 } elseif ($a>=0 && $b<=0 || $a<=0 && $b>=0) {
 	echo $a+$b;
 };

?>
	
	
</body>
</html>


