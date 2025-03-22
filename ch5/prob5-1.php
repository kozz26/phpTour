<?php
    //関数を定義
    function showStrs($num,$str){
        for($i = 0; $i < $num; $i++)
        echo $str . "<br>";
    }

    //関数の呼び出し
    showStrs(5,"HelloPHP");