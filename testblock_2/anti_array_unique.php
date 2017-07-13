<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 17:40
 */
$arr = array();
for ($i = 0; $i < 10; $i++){
        $arr[$i] = rand(0,9);
}

function anti_unique($a){
    $new_arr = array();
    foreach ($a as $key => $value){
        for ($i = 0; $i < count($a); $i++){
            if ($key != $i && $value == $a[$i]){
                $new_arr[$key] = $value;
                break;
            }
        }
        if (isset($new_arr[$key]) == false){
            $new_arr[$key] = '-';
        }
    }
    return $new_arr;
}

echo "\nОригинальный массив:\n";
foreach ($arr as $key1 =>$v2) {
    echo " $v2 ";
}
echo "\nМассив из повторяющихся значений\n";
$new_arr = anti_unique($arr);
foreach ($new_arr as $v2) {
    echo " $v2 ";
}
