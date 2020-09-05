<?php

function summArr($filename) {
    $k = file($filename);
    $k[0] = str_replace(array("\r", "\n"), "", $k[0]);
    $k[1] = str_replace(array("\r", "\n"), "", $k[1]);
    $k1 = array_reverse(str_split($k[0]));
    $k2 = array_reverse(str_split($k[1]));
    if (count($k1) > count($k2)) {
        $l = count($k1);
    } else
        $l = count($k2);

    for ($i=0; $i <= $l; $i++) {
        if (($k1[$i] + $k2[$i]) < 10) {
            $k3[] = ($k1[$i] + $k2[$i]);
        } else {
            $k3[] = ($k1[$i] + $k2[$i])%10;
            $k1[$i+1] = $k1[$i+1] + (int)(($k1[$i]+$k2[$i])/10);
        }

    }
    $k3 = array_reverse($k3);


    $k3 = implode($k3);
    if($k3[0] == 0) {
        $k3 = substr($k3,1);
    }
    file_put_contents($filename, PHP_EOL.$k3, FILE_APPEND );
    return "Сумма чисел " . $k[0] . "<br>" . $k[1] . "<br>" . "равна " . $k3;


}

echo summArr("./chisla.txt");

