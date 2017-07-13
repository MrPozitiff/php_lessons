<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Анаграмма - Домашнее задание</title>
</head>
<body>
<h2>Являются ли слова анаграммой</h2>
<form method="post" >
    <input type="text" name="first_word" placeholder="Первое слово"><br>
    <input type="text" name="second_word" placeholder="Второе слово"><br>
    <input type="submit" name="submit">
</form>
<?php echo $_POST['answer']; ?>
