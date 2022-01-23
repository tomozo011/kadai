<?php
    $num = [60, 50, 90, 70, 85, 40];

// 最大値
    echo max($num);
        echo("<br>");

// 最小値
    echo min($num);
        echo("<br>");

// 小さい順
    sort($num);
    for($i = 0; $i < count($num); $i++){
        echo($num[$i] . "\n");
    }
?>