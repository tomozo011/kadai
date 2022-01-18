<?php
    function calc($num1, $num2){
        // 和
            return $num1 + $num2 ."\n";
        // 差
            return $num1 - $num2 ."\n";
        // 積
            return $num1 * $num2 ."\n";
        // 商
            return $num1 / $num2 ."<br>";
    }

    function name($first, $last) {
        return $first . $last;
    }

    $calc = calc(12,3);
    $full_name = name("John", "Lennon");
    
    echo($calc);
    echo($full_name);
?>