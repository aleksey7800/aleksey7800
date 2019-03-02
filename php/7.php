<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

$clock = date("H") + 3;
$min = date("i");
$chas = 'часов';
$minut = 'минут';
if ($clock == 1 || $clock == 21) {
	$chas = 'час';
} elseif ($clock >= 2 && $clock <= 4 || $clock >= 22 && $clock <= 24) {
	$chas = 'часа';
}; 

if ($min == 1) {
	$minut = 'минута';
} elseif ($min >= 2 && $min <= 4) {
	$minut = 'минуты';
}



echo $clock . ' ' . $chas . '-' . $min . ' ' . $minut;
	
?>
</body>
</html>
