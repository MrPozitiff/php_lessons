<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 16:27
 */

$first_word = isset($_POST['first_word'])?$_POST['first_word']: false;
$second_word = isset($_POST['second_word'])?$_POST['second_word']: false;
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

$_POST['answer'] = anagram($first_word, $second_word);