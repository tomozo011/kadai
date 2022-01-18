<?php
    $num1 = 12;
    $num2 = 2;

    // 和
        echo($num1 + $num2);
    // 差
        echo($num1 - $num2);
    // 積
        echo($num1 * $num2);
    // 商
        echo($num1 / $num2);

    echo("<br>");

    function full_name (){
        $last_name = ["佐藤", "田中", "鈴木", "山田"];
        $first_name = ["太郎", "花子", "次郎", "三郎"];

            for($i = 0; $i < count($last_name); $i++){
                echo($last_name[$i] . " " . $first_name[$i] . "<br>");
            }
    }

    full_name();
?>