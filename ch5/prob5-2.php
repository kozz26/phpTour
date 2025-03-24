<?php
    function min_number($n1,$n2){
        if($n1<$n2){
            return $n1;
        }

        return $n2;
    }

    $a = 10;
    $b = 5;
    $result = min_number($a,$b);

    echo "\$a={$a}<br>";
    echo "\$b={$b}<br>";
    echo "\$aと\$bのうち最小のものは{$result}です";