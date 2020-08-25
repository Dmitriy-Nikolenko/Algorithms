<?php

function binarySearch($myArray, $num)
{
	$start = 0;
	$end = count($myArray)-1;
	$n = 0;
    $c = 0;
    $k = '';
	while ($start <= $end) {
		$n++;
		$base = floor(($start + $end) / 2);
		echo "Проверяется элемент с индексом: $base <br>";
	if ($myArray[$base] <= $num || $myArray[$base] >= $num) {
		    if ($myArray[$base] == $num) {
            $k .= $base . " ";
            $c++;
		    }

        ($myArray[$base-1] <= $num) ?  $start = $base + 1 :  $end = $base - 1;

        		}
	}
    echo "Количество повторений числа $num = $c, индексы в масиве = $k";
    return $k;
}


$arr = [1,2,3,3,3];
$num =3;

binarySearch($arr, $num);