<!-- 1. Первое задание -->

<?php
 for ($i = 0; $i <= 100; $i++) { 
 	 if ($i % 3 == 0) {
 	 	echo $i . "<br>";
 	 }
 }
?>

<!-- 2. Задание -->

<?php
$str = '';
 for ($i = 0; $i <= 10; $i++) { 
 	 if ($i == 0) {
 	 	$str = ' – это ноль.';
 	 	echo $i . $str . "<br>";
 	 } elseif ($i % 2 == 0 ) {
 	 	$str = ' - четное число.';
 	 	echo $i . $str . "<br>";
 	 } else {
 	 	$str = ' - нечетное число.';
 	 	echo $i . $str . "<br>";
 	 }
 }
?>

<!-- 3 Задание -->

<?php


$arr = [
	'Московская область' => 'Электросталь, Ногинск, Балашиха',
	'Владимирска область' => 'Владимир, Киржач, Петушки',
	'Ленинградская область' => 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт'
];
	foreach ($arr as $key => $value) {

		echo $key . '<br>' . $value;
	}
?>

<!-- 4.5.9 задание -->


<form action="" method="GET">
	<input type="text" name="slovo">
	<input type="submit">
</form>
<?php	
function translit($num) {
$arr = [
	'а' => 'a', 'б' => 'b', 'в' => 'v','г' => 'g','д' => 'd','е' => 'e','ж' => 'zh','з' => 'z','з' => 'z','и' => 'i','к' => 'k','л' => 'l','м' => 'm','н' => 'n','о' => 'o','п' => 'p','р' => 'r','с' => 's','т' => 't','у' => 'y','ф' => 'f','х' => 'x','ц' => 'tc','ч' => 'ch','ш' => 'th','щ' => 'th','ы' => 'u','э' => 'ai','ю' => 'yu','я' => 'ia',' ' => ' '
	];
	$newarr = '';
	 $str = preg_split('//u',$num,-1,PREG_SPLIT_NO_EMPTY);

		for ($i=0; $i <= mb_strlen($num); $i++) { 
			$newarr .= $arr[$str[$i]];
		}
		return $newarr;
	}
echo translit($_REQUEST['slovo']);
?>

<!-- 6 задание не понял где взять шаблон сайта) реализовал подменю-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">

</head>
<body>

<details>
	<summary>123</summary>	
	 123456
</details>

<?php

	$arr[0] = 'Первый пункт';
	$arr[1] = 'Второй пункт';
	$arr[2] = 'Третий Пункт';
	$arr2[0] = 'Подпункт';
	$arr2[1] = 'Подпункт';
	$arr2[2] = 'Подпункт';

	$str = "<ul>";
	for ($i=0; $i < count($arr); $i++) { 
		if ($arr[1] == $arr[$i]) {
			$str2 = "<details><summary>$arr[$i]</summary>";
			for ($j=0; $j < count($arr2); $j++) { 
				$str2 .= "<li> $arr2[$j] </li>";
			}
			$str2 .= "</details>";
			$str .= $str2;
			continue;
		}
		$str .= "<li> $arr[$i] </li>";
	}
		$str .= "</ul>";
		echo $str;
?>

</body>
</html>


<!-- 8 задание и соотвественно переделаное предыдущее-->

<?php 

$arr = [];
	
$arr = [
	'Московская область' => $arr2 = ['Электросталь', 'Ногинск', 'Балашиха', 'Коломна'],
	'Владимирска область' => $arr3 = ['Владимир', 'Киржач', 'Петушки'],
	'Ленинградская область' => $arr4 = ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
];
	$z = 0;
	foreach ($arr as $key => $value) {
		for ($i=0; $i < count($value); $i++) { 
			$str = preg_split('//u',$value[$i],-1,PREG_SPLIT_NO_EMPTY);
				if ($str[0] == 'К') {
					echo $value[$i] . "<br>";
					$z++;
				}
		}
	}
	echo "Найдено $z города";

?>
