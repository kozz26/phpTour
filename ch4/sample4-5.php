<?php
    $num = 0;
    echo "繰り返し回数:{$num}<br>";
    echo "whileループによる処理：";

    $i = 0;
    while($i < $num){
        echo "*";
        $i++;
    }

    echo "<br>do ~ whileループによる処理：";
    $i = 0;
    do {
        echo "*";
        $i++;
    } while ($i < $num);

?>