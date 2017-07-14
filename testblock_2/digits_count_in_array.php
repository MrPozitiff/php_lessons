<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 14.07.17
 * Time: 14:15
 */

$arr = create_array(10,false);

echo "<h4>Задание</h4>";
echo "<p>Дан массив с числами. Подсчитайте количество цифр 3 в данном массиве.</br> Пример: [13, 35, 3, 443] - в массиве 4 цифры 3.</p>";
echo "Оригинальный массив:";
view_array($arr);
echo "</br>".digits_count($arr,3);