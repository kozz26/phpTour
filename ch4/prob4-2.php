<?php



for($n=1; $n<=100; $n++){
    $count = 0;
    for($j=1; $j<=$n; $j++){
        if($n%$j == 0){
            $count++;
        }
    }
    if($count === 2){
        echo "{$n}　";
    }
    
}

?>