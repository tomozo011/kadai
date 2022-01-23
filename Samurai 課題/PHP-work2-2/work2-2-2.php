<?php
    $item = [
            "itemid" => 1,
            "name" => "pencil",
            "price" => 100,
            "stock" => 50
    ];

    foreach($item as $key => $value){
        if($key === "name"){
            echo($key . ":" . " " . $value . "<br>");
        }elseif($key === "price"){
            echo($key . ":" . " " . $value . "<br>");
        }
    }

?>