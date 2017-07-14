<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 07.07.17
 * Time: 20:38
 */

$email = (string) isset($_POST['email'])?trim($_POST['email']):false;
$pass = (string) isset($_POST['pass'])?trim($_POST['pass']):false;

if ($email == false || $pass == false) {
    if ($email == false && $pass == false) {
        echo '';
    } else {
        echo "Пожалуйста, заполните все поля ввода!";
    }
} else {
    $link = mysqli_connect('localhost', 'lessons', '123454321', 'Users');
    $email_valid = mysqli_escape_string($link, filter_var($email, FILTER_VALIDATE_EMAIL));
    //echo var_dump($email_valid);
    if ($email_valid == false) {
        $_POST['answer'] = "Пожалуйста, введите правильный e-mail!";
    } else {
        $pass_secure = md5($pass);
        $salt = md5($pass . $pass_secure);

        $querry = "SELECT * FROM users WHERE email='$email_valid'";
        $result = mysqli_query($link, $querry);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($row['email'] == $email_valid) {
            if ($row['pass'] == $pass_secure && $row['salt'] == $salt) {
                $_POST['answer'] = "<h2> Авторизация успешна! </br>Добро пожаловать, ". $email . "!</h2>";
            } else {
                $_POST['answer'] = "Неверный e-mail или пароль";
            }
        } else {
            $_POST['answer'] = "Пользователь не найден! </br> Пожалуйста, <a href='index.php?selection=1&submit=Submit' >зарегестрируйтесь</a>";
        }
    }
}

/*
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
*/