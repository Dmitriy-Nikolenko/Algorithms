<?php
$a = 2;
$n = 1000;
$arr= [];
$res = 1;
if ($n == 1) {
    echo (number_format($a,  0, ".", ""));
} else if (($n % 2) == 0) {
    for($i = 1; $i <= $n/2; $i++) {
        $arr[$i] = $a;
    }
   // var_dump($res);
    for($j=1; $j<=count($arr); $j++) {
        $res *= ($arr[$j]);
    }
    $res = $res * $res;
    echo (number_format($res,  0, ".", ""));
}
    else if (($n % 10) == 0) {

        for($i = 1; $i <= $n/10; $i++) {
            $arr[$i] = $a;
        }
        // var_dump($res);
        for($j=1; $j<=count($arr); $j++) {
            $res *= ($arr[$j]);
        }
        $res = pow($res, 10);
        echo (number_format($res,  0, ".", ""));
    }
else {
    for($i = 1; $i <= $n; $i++) {
        $arr[$i] = $a;
    }
       for($j=1; $j<=count($arr); $j++) {
        $res *= ($arr[$j]);
    }

    echo (number_format($res,  0, ".", ""));
}


echo "<br>Правильное значение: <br>" . bcpow($a, $n);
file_put_contents("./otvet.txt", number_format($res,  0, ".", ""), FILE_APPEND );





