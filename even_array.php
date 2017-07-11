<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 16:55
 */
$arr = array();
for ($i = 0; $i < 10; $i++){
    for ($j = 0; $j <10; $j++){
        $arr[$j][$i] = rand(0,1000);
    }
}
if (php_sapi_name() == 'cli') {
    echo "\n\nЧетные цифры из массива:\n";
    foreach ($arr as $v1) {
        echo "\n";
        foreach ($v1 as $v2) {
            if ( is_int($v2/2)) {
                echo "$v2 ";
            } else {
                echo "    ";
            }
        }
    }
} else {
    echo "<h3>Оригинальный массив:</br></h3>";
    echo "<table border=\"1\">";
    foreach ($arr as $v1) {
        echo "<tr>";
        foreach ($v1 as $v2) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<h3>Четные цифры из массива:</br></h3>";
    echo "<table border=\"1\">";
    foreach ($arr as $v1) {
        echo "<tr>";
        foreach ($v1 as $v2) {
            if ( is_int($v2/2)) {
                echo "<td> $v2 </td>";
            } else {
                echo "<td>     </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}