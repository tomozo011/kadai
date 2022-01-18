<?php
    $month = "１月";

    switch($month){
        case "１月":
            echo("31日");
            break;
        case "2月":
            echo("28日");
            break;
        case "3月":
            echo("31日");
            break;
        case "4月":
            echo("30日");
            break;
        case "5月":
            echo("31日");
            break;
        case "6月":
            echo("30日");
            break;
        case "7月":
            echo("31日");
            break;
        case "8月":
            echo("31日");
            break;
        case "9月":
            echo("30日");
            break;
        case "10月":
            echo("31日");
            break;
        case "11月":
            echo("30日");
            break;
        case !"12月":
            echo("31日");
            break;
        default:
            echo("エラー");
            break;
    }
?>