<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Самое длинное слово - Домашнее задание</title>
</head>
<body>
<h2>Выводит самое длинное слово в предложении</h2>
<form method="post" >
    <input type="text" name="sentence" placeholder="Введите предложение"><br>
    <input type="submit" name="submit">
</form>
<?php echo $_POST['answer']; ?>