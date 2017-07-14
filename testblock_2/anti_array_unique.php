<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 17:40
 */
$arr = create_array(10,false,0,10);

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

echo "Оригинальный массив:</br>";
view_array($arr);

echo "</br>Массив из повторяющихся значений</br>";
$new_arr = anti_unique($arr);
view_array($new_arr);

