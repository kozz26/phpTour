<?php
    $temp = 20000;

    if($temp >= 100){
        echo "水野温度は{$temp}です。<br>";
        echo "水蒸気（気体）です。";
    } elseif(0 < $temp && $temp < 100) {
        echo "水野温度は{$temp}です。<br>";
        echo "水（液体）です。";
    } else {
        echo "水野温度は{$temp}です。<br>";
        echo "氷（個体）です。";
    }
?>