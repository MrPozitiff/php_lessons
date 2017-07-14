<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 16:27
 */

$first_word = isset($_POST['first_word'])?$_POST['first_word']: false;
$second_word = isset($_POST['second_word'])?$_POST['second_word']: false;

$_POST['answer'] = anagram($first_word, $second_word);