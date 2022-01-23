<?php
// 最大値
function max_num($num){
    if($num[0] > $num[1] && $num[0] > $num[2] && $num[0] > $num[3] && $num[0] > $num[4] && $num[0] > $num[5]){
        return $num[0];
    }
    if($num[1] > $num[0] && $num[1] > $num[2] && $num[1] > $num[3] && $num[1] > $num[4] && $num[1] > $num[5]){
        return $num[1];
    }
    if($num[2] > $num[0] && $num[2] > $num[1] && $num[2] > $num[3] && $num[2] > $num[4] && $num[2] > $num[5]){
        return $num[2];
    }
    if($num[3] > $num[0] && $num[3] > $num[1] && $num[3] > $num[2] && $num[3] > $num[4] && $num[3] > $num[5]){
        return $num[3];
    }
    if($num[4] > $num[0] && $num[4] > $num[1] && $num[4] > $num[2] && $num[4] > $num[3] && $num[4] > $num[5]){
        return $num[4];
    }
    if($num[5] > $num[0] && $num[5] > $num[1] && $num[5] > $num[2] && $num[5] > $num[3] && $num[5] > $num[4]){
        return $num[5];
    }
}

// 最小値
function min_num($num){
    if($num[0] < $num[1] && $num[0] < $num[2] && $num[0] < $num[3] && $num[0] < $num[4] && $num[0] < $num[5]){
        return $num[0];
    }
    if($num[1] < $num[0] && $num[1] < $num[2] && $num[1] < $num[3] && $num[1] < $num[4] && $num[1] < $num[5]){
        return $num[1];
    }
    if($num[2] < $num[0] && $num[2] < $num[1] && $num[2] < $num[3] && $num[2] < $num[4] && $num[2] < $num[5]){
        return $num[2];
    }
    if($num[3] < $num[0] && $num[3] < $num[1] && $num[3] < $num[2] && $num[3] < $num[4] && $num[3] < $num[5]){
        return $num[3];
    }
    if($num[4] < $num[0] && $num[4] < $num[1] && $num[4] < $num[2] && $num[4] < $num[3] && $num[4] < $num[5]){
        return $num[4];
    }
    if($num[5] < $num[0] && $num[5] < $num[1] && $num[5] < $num[2] && $num[5] < $num[3] && $num[5] < $num[4]){
        return $num[5];
    }
}

// 小さい順

// 2番目
function second($num){
    if(min_num($num) < $num[0] && $num[0] < $num[1] && $num[0] < $num[2] && $num[0] < $num[3] && $num[0] < $num[4]){
        return("\n");
    }
    if(min_num($num) < $num[1] && $num[1] < $num[0] && $num[1] < $num[2] && $num[1] < $num[3] && $num[1] < $num[4]){
        return($num[1]);
        return("\n");
    }
    if(min_num($num) < $num[2] && $num[2] < $num[0] && $num[2] < $num[1] && $num[2] < $num[3] && $num[2] < $num[4]){
        return($num[2]);
        return("\n");
    }
    if(min_num($num) < $num[3] && $num[3] < $num[0] && $num[3] < $num[1] && $num[3] < $num[2] && $num[3] < $num[4]){
        return($num[3]);
        return("\n");
    }
    if(min_num($num) < $num[4] && $num[4] < $num[0] && $num[4] < $num[1] && $num[4] < $num[2] && $num[4] < $num[3]){
        return($num[4]);
        return("\n");
    }
}

// ３番目
function third($num){
    if(second($num) < $num[0] && $num[0] < $num[2] && $num[0] < $num[3] && $num[0] < $num[4]){
        return($num[0]);
        return("\n");
    }
    if(second($num) < $num[2] && $num[2] < $num[0] && $num[2] < $num[3] && $num[2] < $num[4]){
        return($num[2]);
        return("\n");
    }
    if(second($num) < $num[3] && $num[3] < $num[0] && $num[3] < $num[2] && $num[3] < $num[4]){
        return($num[3]);
        return("\n");
    }
    if(second($num) < $num[4] && $num[4] < $num[0] && $num[4] < $num[2] && $num[4] < $num[3]){
        return($num[4]);
        return("\n");
    }
}

// ４番目
function forth($num){
    if(third($num) < $num[2] && $num[2] < $num[3] && $num[2] < $num[4]){
        return($num[2]);
        return("\n");
    }
    if(third($num) < $num[3] && $num[3] < $num[2] && $num[3] < $num[4]){
        return($num[3]);
        return("\n");
    }
    if(third($num) < $num[4] && $num[4] < $num[2] && $num[4] < $num[3]){
        return($num[4]);
        return("\n");
    }
}

// ５番目
function fifth($num){
    if(third($num) < $num[2] && $num[2] < $num[4]){
        return($num[2]);
        return("\n");
    }
    if(third($num) < $num[4] && $num[4] < $num[2]){
        return($num[4]);
        return("\n");
    }
}

// ソート
function sort_num($num){
        return array(
                    min_num($num),
                    second($num),
                    third($num),
                    forth($num),
                    fifth($num),
                    max_num($num),
                );
}

$num1 = [60, 50, 90, 70, 85, 40];
$number = [];

$max = max_num($num1);
$min = min_num($num1);
$sort = sort_num($num1);

echo($max);
    echo("<br>");

echo($min);
    echo("<br>");

var_dump($sort);

?>