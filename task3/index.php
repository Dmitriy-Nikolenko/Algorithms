<?php

function getArr($n,$m) {
    $k = 1;
    if ($m == 0) {
        echo "Ошибка количество строк не может быть равно 0";

    } else {


        for($nStart = 1; $nStart<=$n-1; $nStart++) {
            echo $result1[$nStart] = $k;
            $k++;
            echo '<br>';
        }

        for ($mStart = 1; $mStart <= $m - 1; $mStart++) {
            echo $result2[$mStart] = $k;
            $k++;
        }

        for($nEnd = $n; $nEnd >= 1; $nEnd--) {
            echo $result3[$nEnd] = $k;
            $k++;
        }

        for ($mEnd = $m; $mEnd > 0; $mEnd--) {
            echo $result4[$mEnd] = $k;
            $k++;

        }

    }



}
getArr(4,4);


//function getArr($n, $m) {
//    for ($i=1; $i<=$n; $i++) {
//        if($i < $n) {
//            echo $result[] = $i .'<br>';
//        } else if ($i = $n) {
//            echo $result[] = $i;
//        }
//    }
//    for ($j = $n + 1; $j <= $m + ($n - 1); $j++) {
//        echo $result[] = $j;
//    }
//
//    for ($k = $n + $m; $k <= ($m * $n) - ($n - 1); $k++ ) {
//        echo $result[] = $k;
//    }
//}
//
//getArr(3, 3);


//function getArr($n, $m) {
//    $k = 1;
//    if ($m == 0) {
//     echo "Ошибка количество строк не может быть равно 0";
//    }
//    for($i = 1; $i<=$n; $i++) {
//
//        for ($j = 1; $j<=$m; $j++) {
//            if ($m>3 && $n>3 || $k<=9) { $k = 0 . $k;}
//            if ($j == $m ) {
//                echo $result = $k . '<br>';
//                $k++;
//            } else {
//                echo $result = $k . ' ';
//                $k++;
//            }
//        }
//
//    }
//
//
//}
//
//getArr(3,5);



