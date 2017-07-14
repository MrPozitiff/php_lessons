<?php
/**
 * Created by PhpStorm.
 * User: desys
 * Date: 07.07.17
 * Time: 20:38
 */

$email = (string) isset($_POST['email'])?trim($_POST['email']):false;
$email_confirmation = (string) isset($_POST['email_confirmation'])?trim($_POST['email_confirmation']):false;
$pass = (string) isset($_POST['pass'])? trim($_POST['pass']):false;
$pass_confirmation = (string) isset($_POST['pass_confirmation'])?trim($_POST['pass_confirmation']):false;

if ($email == false || $pass == false || $email_confirmation == false || $pass_confirmation == false){
    if ($email == false && $pass == false && $email_confirmation == false && $pass_confirmation == false){
        $_POST['answer'] = '';
    } else {
        $_POST['answer'] =  "Пожалуйста, заполните все поля ввода!";
    }
} else {
    if ($email != $email_confirmation) {
        $_POST['answer'] = "Ошибка! Введенные e-mail не совпадают!";
    } elseif ($pass != $pass_confirmation) {
        $_POST['answer'] = "Ошибка! Введенные пароли не совпадают!";
    } else {
        $link = mysqli_connect('localhost', 'lessons', '123454321', 'Users');
        $email_valid = mysqli_escape_string($link, filter_var($email, FILTER_VALIDATE_EMAIL));
        if ($email_valid == false) {
            $_POST['answer'] = "Пожалуйста, введите правильный e-mail!";
        } else {
            $pass_secure = md5($pass);
            $salt = md5($pass . $pass_secure);

            $querry = "SELECT * FROM users WHERE email='$email_valid'";
            $result = mysqli_query($link, $querry);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($row['email'] == $email_valid) {
                $_POST['answer'] = "Данный пользователь уже существует </br> Пожалуйста, используйте <a href='index.php?selection=0&submit=Submit'>форму авторизации</a>";
            } else {
                $reg_querry = "INSERT INTO `users`( `email`, `pass`, `salt`) VALUES ('$email_valid','$pass_secure','$salt')";
                $reg_result = mysqli_query($link, $reg_querry);
                //$reg_row = mysqli_fetch_array($reg_result, MYSQLI_ASSOC);
                if ($reg_result == true) {
                    $_POST['answer'] = "Регистрация успешна!";
                } else {
                    $_POST['answer'] = "Что-то пошло не так!";
                }
            }
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