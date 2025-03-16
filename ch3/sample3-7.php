<?php

    $a = 2000;
    echo '$aの値による処理の分岐（swich文の場合）<br>';

    switch($a){
        case 1:
            echo '$aは1です';
            break;
        
        case 20000:
            echo '$aの値は20000です';
            break;
        
        default:
            echo '$aの値は' . $a . 'です';
    }

    ?>