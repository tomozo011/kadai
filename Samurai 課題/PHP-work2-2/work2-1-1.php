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








//ソート
function max_sort(&$array){
    $temp=0;  //値一時保管用
    for($i=0;$i<(count($array)-1);$i++){
      for($j=$i+1;$j<(count($array));$j++){
        if($array[$i]>$array[$j]){
          $temp=$array[$i];
          $array[$i]=$array[$j];
          $array[$j]=$temp;
        }
      }
    }
  }
  //最大値を返す
  function max_date($array){
    $answer=$array[0];
    for($i=1;$i<count($array);$i++){
      if($array[$i]>$answer){
        $answer=$array[$i];
      }
    }
    return $answer;
  }
  //最小値を返す
  function min_date($array){
    $answer=$array[0];
    for($i=1;$i<count($array);$i++){
      if($array[$i]<$answer){
        $answer=$array[$i];
      }
    }
    return $answer;
  }
  
  //変数宣言
  $array=[60,50,90,70,80,45];
  
  //最大値を返す
  print(max_date($array)."\n");
  //最小値を返す
  print(min_date($array)."\n");
  //ソート
  max_sort($array);
  //ソートした結果を表示
  print("小さいもの順でソート\n");
  foreach($array as $i){
    print($i." "."\n");
  }
?>