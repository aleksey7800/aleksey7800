<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

function sum($x, $y)
{
	return $x+$y;
}
function raz($x, $y)
{
	return $x-$y;
}
function del($x, $y)
{
	return $x/$y;
}
function ymn($x, $y)
{
	return $x*$y;
}	

function mathOperation($arg1, $arg2, $operation) {
	if ($operation == '+') {
		return sum($arg1, $arg2);
	} elseif ($operation === '-') {
		return raz($arg1, $arg2);
	} elseif ($operation == '/') {
		return del($arg1, $arg2);
	} elseif ($operation == '*') {
		return ymn($arg1, $arg2);
	}
}

echo mathOperation(2, 2, '*');
	
?>
</body>
</html>


