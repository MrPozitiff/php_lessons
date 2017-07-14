<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 13.07.17
 * Time: 18:38
 */
$first_word = isset($_POST['sentence'])?$_POST['sentence']: false;

$_POST['answer'] = "<p>Самые длинные слова в предложении:</p>".longest_word($first_word);