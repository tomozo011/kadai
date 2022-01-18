<?php
    $subjects = [
        "国語" => 46,
        "数学" => 80,
        "英語" => 78,
        "理科" => 45,
        "社会" => 30
    ];

    foreach($subjects as $subject => $score){
        echo($subject . $score . "\n");
    }
?>