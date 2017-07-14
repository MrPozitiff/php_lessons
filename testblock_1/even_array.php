<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 16:55
 */
$arr = create_array();

if (php_sapi_name() != 'cli') {
    echo "<h4>Задание:</h4>";
    echo "<p>Сгенерировать массив чисел 10х10 со случайными значениями от 0 до 1000, удалить из массива все четные элементы</p>";
    echo "<h4>Оригинальный массив:</br></h4>";
    echo "<table border=\"1\">";
    foreach ($arr as $v1) {
        echo "<tr>";
        foreach ($v1 as $v2) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<h4>Нечетные элементы массива:</br></h4>";
    echo "<table border=\"1\">";
    foreach ($arr as $v1) {
        echo "<tr>";
        foreach ($v1 as $v2) {
            if (is_int($v2 / 2)) {
                echo "<td>     </td>";
            } else {
                echo "<td> $v2 </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}else {
    echo "\n\nЧетные цифры из массива:\n";
    foreach ($arr as $v1) {
        echo "\n";
        foreach ($v1 as $v2) {
            if (is_int($v2 / 2)) {
                echo "$v2 ";
            } else {
                echo "    ";
            }
        }
    }
}