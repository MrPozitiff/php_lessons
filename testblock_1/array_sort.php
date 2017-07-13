<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 18:14
 */
$arr = array();
for ($i = 0; $i < 10; $i++){
    for ($j = 0; $j <10; $j++){
        $arr[$j][$i] = rand(0,1000);
    }
}
$sorted_arr = $arr;
foreach ($sorted_arr as $key1 => $v1){
    foreach ($v1 as $key2 => $v2){
        for ($i = 0; $i < 9; $i++){
            if ($sorted_arr[$key1][$i] > $sorted_arr[$key1][$i+1]){
                list($sorted_arr[$key1][$i], $sorted_arr[$key1][$i+1] ) = array($sorted_arr[$key1][$i+1], $sorted_arr[$key1][$i]);
            } else {
                continue;
            }
        }
    }
}
foreach ($sorted_arr as $key1 => $v1){
    foreach ($v1 as $key2 => $v2){
        for ($i = 0; $i < 9; $i++){
            if ($sorted_arr[$i][$key2] > $sorted_arr[$i+1][$key2]){
                list($sorted_arr[$i][$key2], $sorted_arr[$i+1][$key2] ) = array($sorted_arr[$i+1][$key2], $sorted_arr[$i][$key2]);
            } else {
                continue;
            }
        }
    }
}
if (php_sapi_name() == 'cli') {
    echo "\nОригинальный массив:\n";
    foreach ($arr as $key1 =>$v1) {
        echo "\n";
        foreach ($v1 as $key2 => $v2) {
            if (strlen($v2) == 1){
                echo " $v2   ";
            } elseif (strlen($v2) == 2){
                echo " $v2  ";
            } else {
                echo " $v2 ";
            }
        }
    }
    echo "\n\nОтсортированный массив:\n";
    foreach ($sorted_arr as $key1 =>$v1) {
        echo "\n";
        foreach ($v1 as $key2 => $v2) {
            if (strlen($v2) == 1){
                echo " $v2   ";
            } elseif (strlen($v2) == 2){
                echo " $v2  ";
            } elseif (strlen($v2) == 3){
                echo " $v2 ";
            } else {
                echo " $v2";
            }
        }
    }
} else {
    echo "<!DOCTYPE html> \n <html lang=\"en\"> \n <head> \n <meta charset=\"UTF-8\"> \n <title>Cортировка массива - Домашнее задание</title> \n </head> \n <body>";
    echo "<h4>Задание:</h4>";
    echo "<p>Сгенерировать массив из 10 чисел со случайными значениями от 0 до 1000. </br>Отсортировать массив по возрастанию, не прибегая к встроенным функциям сортировки массива.</p>";
    echo "<h4>Оригинальный массив:</h4></br>";
    echo "<table border=\"1\">";
    foreach ($arr as $key1 => $v1) {
        echo "<tr>";
        foreach ($v1 as $key2 => $v2) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<h4>Отсортированный массив:</h4></br>";
    echo "<table border=\"1\">";
    foreach ($sorted_arr as $key1 => $v1) {
        echo "<tr>";
        foreach ($v1 as $key2 => $v2) {
            echo "<td>".$v2."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}