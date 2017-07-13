<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 12.07.17
 * Time: 14:54
 */

$first = 3;
$diff = 5;
$count = 10;
if ('cli' == php_sapi_name()) {
    for ($i = 1; $i <= 10; $i++) {
        echo "\n" . $i . " член прогресии: " . ($first + (($i - 1) * $diff));
    }
} else {
    for ($i = 1; $i <= 10; $i++) {
        echo "<lo>" . $i . " член прогресии: " . ($first + (($i - 1) * $diff)) . "</lo><br>";
    }
}