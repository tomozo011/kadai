<?php
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $str_length = strlen($str);

    echo($str_length . "<br>");

    echo substr($str, 4);
    echo("<br>");
    
    echo strpos($str, "G");
?>