<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 15:13
 */
//Console - version
if (php_sapi_name() == 'cli') {
    echo "Введите дву- или трехзначное число оканчивающееся на цифру 5: \n";
    $input = (int)trim(fgets(STDIN));
    if ($input != 0) {
        echo trickysquare($input) . "\n";
    } else {
        echo "Введите целое число!\n";
    }
} else { //Added Web-version
    $digit = isset($_POST['digits'])? $_POST ['digits']:'';
    if (empty($digit)){
        echo '';
    } elseif ($digit != 0) {
        echo "<h3>".trickysquare($digit) . "</h3></br>";
    } else {
        echo "<h3>Введите целое число!</h3></br>";
    }
}

