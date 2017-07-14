<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 11.07.17
 * Time: 18:14
 */
$arr = create_array();
$sorted_arr = my_array_sort ($arr);

if (php_sapi_name() != 'cli')  {
    echo "<h4>Задание:</h4>";
    echo "<p>Сгенерировать массив из 10 чисел со случайными значениями от 0 до 1000. </br>Отсортировать массив по возрастанию, не прибегая к встроенным функциям сортировки массива.</p>";
    echo "<h4>Оригинальный массив:</h4></br>";

    view_array($arr);

    echo "<h4>Отсортированный массив:</h4></br>";

    view_array($sorted_arr);

} else {
    echo "\nОригинальный массив:\n";
    view_array($arr);
    echo "\n\nОтсортированный массив:\n";
    view_array($sorted_arr);
}