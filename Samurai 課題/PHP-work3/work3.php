<?php
$items = [
        ['id'=>1,'name' => 'pencil', 'price' =>100, 'stock' => 78, 'sales' => 47],
        ['id'=>2,'name' => 'pen', 'price' =>150, 'stock' => 12, 'sales' => 30],
        ['id'=>3,'name' => 'case', 'price' =>500, 'stock' => 12, 'sales' => 20],
        ['id'=>4,'name' => 'note', 'price' =>200, 'stock' => 97, 'sales' => 100]
];

// 在庫多い順

// function stock($arr){
//     $i = 0;
//     foreach($arr as $key => $value){
//         $i++;
//         if($i === 1){
//             $stock = array($value['stock']);
//             $name = array($value['name']);
//         }else{
//             array_push($stock, $value['stock']);
//             array_push($name, $value['name']);
//         }  
//     }   
//     array_multisort($stock, $name);
//     var_dump($name,$stock);
//     echo '<br>';
// }
// stock($items);

$stocks = array_column($items, 'stock');
$names = array_column($items, 'name');
array_multisort($stocks, SORT_DESC, 
                $names,  SORT_DESC);
    var_dump($stocks,$names);



// !----------------------------------------------

// 在庫少ない
function stock_less($arr){
    foreach($arr as $key => $value){
        $stock = $value['stock'];
        if($stock < 30){
            var_dump($value['name'] . "\n");
            echo '<br>';
        }
    }
}
stock_less($items);

// !-------------------------------

// 売上高い
function higther_sales($arr){
    $i = 0;
    foreach($arr as $key => $value){
        $i++;
        if($i === 1){
            $item_sele = array($value['price'] * $value['sales']);
            $name = array($value['name']);
        }else{
            array_push($item_sele, $value['price'] * $value['sales']);
            array_push($name, $value['name']);
        }
        
    }
    array_multisort($item_sele,$name);
    var_dump($item_sele, $name);
    echo '<br>';
}
higther_sales($items);

// !-------------------------------------------

// penを含むもの
function strpos_pen($arr){
    foreach($arr as $key => $value){
        if(strpos($value['name'], 'pen') === false){
            
        }else{
            var_dump($value['name'] . ":" . $value['price']);
            echo '<br>';
        }
    }
        
}
strpos_pen($items);
?>