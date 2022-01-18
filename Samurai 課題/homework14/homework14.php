<?php
    function test(){
        $score1 = 80;
        $score2 = 70;
    
        if($score1 <= 75 && $score2 <= 75){
            echo("合格");
        }elseif($score1 + $score2 >= 140 ){
            echo("合格");
        }elseif($score1 + $score2 >= 100 && $score1 >= 90 || $score2 >= 90){
            echo("合格");
        }else{
            echo("不合格");
        }
    }
    test();
?>