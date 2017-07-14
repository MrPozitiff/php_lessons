<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 17:24
 */
$arr = create_array();

if (php_sapi_name() != 'cli') {
    echo "<h4>Задание:</h4>";
    echo "<p>Cгенерировать массив чисел 10х10 со случайными значениями от 0 до 1000, </br>все элементы главной диагонали увеличить на значения напротив лежащих элементов второстепенной диагонали.</p>";
    echo "<h4>Оригинальный массив:</br></h4>";
    echo "<table border=\"1\">";
    foreach ($arr as $key1 => $v1) {
        echo "<tr>";
        foreach ($v1 as $key2 => $v2) {
            if ($key1 == $key2 || $key1 == 9-$key2) {
                echo "<td bgcolor='aqua'> $v2 </td>";
            } else {
                echo "<td> $v2 </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<h4>Новый массив:</br></h4>";
    echo "<table border=\"1\">";
    foreach ($arr as $key1 => $v1) {
        echo "<tr>";
        foreach ($v1 as $key2 => $v2) {
            if ( $key1 == $key2) {
                $before = $v2+$arr[$key1][9-$key2];
                if (strlen($before) == 4){
                    echo "<td bgcolor='aqua'>" .$before. "</td>";
                } else {
                    echo "<td bgcolor='aqua'>" . $before . "</td>";
                }
            } else {
                echo "<td>".$v2."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "\nОригинальный массив:\n";
    view_array($arr);
    echo "\n\nНовый массив:\n";
    foreach ($arr as $key1 => $v1) {
        echo "\n";
        foreach ($v1 as $key2 => $v2) {
            switch (strlen($v2)) {
                case 1:
                    $indent = "   ";
                    break;
                case 2:
                    $indent = "  ";
                    break;
                case 3:
                    $indent = " ";
                    break;
                default:
                    $indent = "";
            }
            if ($key1 == $key2) {
                $before = $v2 + $arr[$key1][9 - $key2];
                if (strlen($before) == 4) {
                    echo " " . $before . $indent . "";
                } else {
                    echo " " . $before . $indent . " ";
                }
            } else {
                echo " " . $v2 . $indent . " ";
            }
        }
    }
}