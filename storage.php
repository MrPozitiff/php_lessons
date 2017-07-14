<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 18:49
 */
//Name and way
$task_num = array(
    ['Форма авторизации', 'auth/index.php'],
    ['Форма регистрации', 'reg/index.php'],
    ['Метод Пети', 'testblock_1/trickysquare/index.php'],
    ['Массив без четных элементов', 'testblock_1/even_array.php'],
    ['Сумма диагоналей массива', 'testblock_1/summ_diagonal_array.php'],
    ['Нестандартная сортировка массива', 'testblock_1/array_sort.php'],
    ['Анаграмма слов','testblock_2/anagram/index.php'],
    ['Массив повторяющихся значений','testblock_2/anti_array_unique.php'],
    ['Самое длинное слово','testblock_2/longest_word/index.php'],
    ['Количество цифр 3 в массиве','testblock_2/digits_count_in_array.php']);
$_POST['task_num'] = $task_num;
// functions storage
// 1. array generation
function create_array($arr_count = 10, $multi = true, $min = 0, $max = 1000){
    $arr = array();
    for ($i = 0; $i < $arr_count; $i++){
        if ($multi == false){
            $arr[$i] = rand($min,$max);
        } else {
            for ($j = 0; $j < $arr_count; $j++) {
                $arr[$j][$i] = rand($min, $max);
            }
        }
    }
    return $arr;
}
// 2. array view
function view_array($which_array){
    if ('cli' == php_sapi_name()){
        foreach ($which_array as $key1 =>$v1) {
            if (is_array($v1) ) {
                echo "\n";
                foreach ($v1 as $key2 => $v2) {
                    if (strlen($v2) == 1) {
                        echo " $v2   ";
                    } elseif (strlen($v2) == 2) {
                        echo " $v2  ";
                    } elseif (strlen($v2) == 3) {
                        echo " $v2 ";
                    } else {
                        echo " $v2";
                    }
                }
            } else {
                echo " ".$v1." ";
            }
        }
    } else {
        echo "<table border=\"1\">";
        foreach ($which_array as $key => $val) {
            if (is_array($val)) {
                echo "<tr>";
                foreach ($val as $key2 => $val2) {
                    echo "<td> $val2 </td>";
                }
                echo "</tr>";
            } else {
                echo " " . $val . " ";
            }
        }
        echo "</table>";
    }
}
// 3. Sorted array by myself
function my_array_sort ($arr)
{
    $sorted_arr = $arr;
    foreach ($sorted_arr as $key1 => $v1) {
        foreach ($v1 as $key2 => $v2) {
            for ($i = 0; $i < 9; $i++) {
                if ($sorted_arr[$key1][$i] > $sorted_arr[$key1][$i + 1]) {
                    list($sorted_arr[$key1][$i], $sorted_arr[$key1][$i + 1]) = array($sorted_arr[$key1][$i + 1], $sorted_arr[$key1][$i]);
                } else {
                    continue;
                }
            }
        }
    }
    foreach ($sorted_arr as $key1 => $v1) {
        foreach ($v1 as $key2 => $v2) {
            for ($i = 0; $i < 9; $i++) {
                if ($sorted_arr[$i][$key2] > $sorted_arr[$i + 1][$key2]) {
                    list($sorted_arr[$i][$key2], $sorted_arr[$i + 1][$key2]) = array($sorted_arr[$i + 1][$key2], $sorted_arr[$i][$key2]);
                } else {
                    continue;
                }
            }
        }
    }
    return $sorted_arr;
}
// 4. Tricky Square by Petya
function trickysquare ($a){
    if ($a > 14 && $a % 5 ==0 &&is_int(($a/5)/2) != true) {
        $first = substr($a, 0, -1);
        $second = $first + 1;
        $square = ($first * $second) . 25;
        return $square;
    } else {
        return $a. " - немножко не подходит под наш способ \n";
    }
}
// 5. Anagram
function anagram ($first_word, $second_word)
{
    if ($first_word == false || $second_word == false) {
        if ($first_word == false && $second_word == false) {
            return '';
        } else {
            return "Для сравнения нужно два слова!";
        }
    } elseif (is_numeric($first_word) || is_numeric($second_word)) {
        return "Для сравнения нужно слова, без цифр";
    } else {
        $first_word = mb_strtolower($first_word, 'UTF-8');
        $second_word = mb_strtolower($second_word, 'UTF-8');
        if (strlen($first_word) == strlen($second_word) &&
            count_chars($first_word) == count_chars($second_word)){
            /*
            $answer = array();
            for ($i = 0; $i < 5; $i++){
                $answer[$i] = str_shuffle ($first_word);
            }
            */
            return "Слова являются анаграмой!";// И пара примеров на удачу: ".implode(', ', $answer);
        } else{
            return "Слова не являются анаграмой";
        }
    }
}
// 6. Longest word in sentence
function longest_word ($sentence){
    $action = explode(' ' , $sentence);
    $res = $action[0];
    $result = '';
    foreach ($action as $value){
        if (mb_strlen($value, 'UTF-8') > mb_strlen($res, 'UTF-8')){
            $result = $value;
        } elseif (mb_strlen($value, 'UTF-8') == mb_strlen($res, 'UTF-8')){
            $result .= ' '. $value;
        }
    }
    return $result;
}
// 7. Digits count in array
function digits_count($arr, $digit = '3'){
    $dig_str = implode($arr);
    $result = count_chars($dig_str,1);
    return "Цифра ".$digit." встречается в массиве ".$result[ord($digit)] ." раз.";
}