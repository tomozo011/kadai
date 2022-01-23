

<?php
    $usr = [
        "users" => [
            "user1" => ['名前' => '山田', '性別' =>'男', "数学" => 78, '国語' => 47, '英語' => 92],
            "user2" => ['名前' => '田中', '性別' =>'女', '数学' => 12, '国語' => 88, '英語' => 67],
            "user3" => ['名前' => '高橋', '性別' =>'男', '数学' => 56, '国語' => 34, '英語' => 77],
            "user4" => ['名前' => '橋本', '性別' =>'女', '数学' => 97, '国語' => 55, '英語' => 45]
        ]
    ];
$users_info = $usr["users"];
$user1_info = $usr["users"]["user1"];
$user2_info = $usr["users"]["user2"];
$user3_info = $usr["users"]["user3"];
$user4_info = $usr["users"]["user4"];

$max_Math = max(array_column($users_info, "数学"));
$min_Jan = min(array_column($users_info, "国語"));

// !--------------------------------------------------------------------!


// 科目合計
$total_Math = array_sum(array_column($users_info, "数学"));
$total_Jan = array_sum(array_column($users_info, "国語"));
$total_Eng = array_sum(array_column($users_info, "英語"));

// 科目平均
function average($total){
    global $users_info;
    return $total / count($users_info);
}
$average_Math = round(average($total_Math));
$average_Jan = round(average($total_Jan));
$average_Eng = round(average($total_Eng));

// !===============================================!

// 男女別

// 数学
function gendar_Math($info){
    global $men_Math;
    global $women_Math;
    foreach($info as $key => $value){
        if($value === "男"){
            $men_Math = $men_Math + $info["数学"];
        }elseif($value === "女"){
            $women_Math = $women_Math + $info["数学"];
        } 
    }
}
// 国語
function gendar_Jan($info){
    global $men_Jan;
    global $women_Jan;
    foreach($info as $key => $value){
        if($value === "男"){
            $men_Jan = $men_Jan + $info["国語"];
        }elseif($value === "女"){
            $women_Jan = $women_Jan + $info["国語"];
        } 
    }
}
// 英語
function gendar_Eng($info){
    global $men_Eng;
    global $women_Eng;
    foreach($info as $key => $value){
        if($value === "男"){
            $men_Eng = $men_Eng + $info["英語"];
        }elseif($value === "女"){
            $women_Eng = $women_Eng + $info["英語"];
        } 
    }
}
// 男女人数
function counter($gend){
    global $i;
    global $a;
    foreach($gend as $word => $content){
        if($content === "男"){
            $i++;
        }elseif($content === "女"){
            $a++;
        }
    }
}
counter($user1_info);
counter($user2_info);
counter($user3_info);
counter($user4_info);

gendar_Math($user1_info);
gendar_Math($user2_info);
gendar_Math($user3_info);
gendar_Math($user4_info);
$average_men_Math = round($men_Math / $i);
$average_women_Math = round($women_Math / $a);

gendar_Jan($user1_info);
gendar_Jan($user2_info);
gendar_Jan($user3_info);
gendar_Jan($user4_info);
$average_men_Jan = round($men_Jan / $i);
$average_women_Jan = round($women_Jan / $a);

gendar_Eng($user1_info);
gendar_Eng($user2_info);
gendar_Eng($user3_info);
gendar_Eng($user4_info);
$average_men_Eng = round($men_Eng / $i);
$average_women_Eng = round($women_Eng / $a);

// !======================================================!

var_dump($max_Math); echo "<br>"; #数学　最大値
var_dump($min_Jan);  echo "<br>"; #国語　最小値

var_dump($average_Math); echo "<br>"; #数学　平均
var_dump($average_Jan); echo "<br>";    #国語　平均
var_dump($average_Eng); echo "<br>";  #英語　平均

var_dump($average_men_Math); echo "<br>"; #男　数学　平均
var_dump($average_women_Math); echo "<br>"; #女　数学　平均
var_dump($average_men_Jan); echo "<br>"; #男　国語　平均
var_dump($average_women_Jan); echo "<br>"; #女　国語　平均
var_dump($average_men_Eng); echo "<br>"; #男　英語　平均
var_dump($average_women_Eng); echo "<br>"; #女　英語　平均

?>