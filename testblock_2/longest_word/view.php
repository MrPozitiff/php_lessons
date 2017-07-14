<h4>Задание</h4>
<p>Дана строка с текстом. Выведите на экран самое длинное слово из этого текста (или слова если несколько слов имеют одинаковую длину). </p>
<form method="post" >
    <input type="text" name="sentence" placeholder="Введите предложение"><br>
    <input type="submit" name="submit">
</form>
<?php echo isset($_POST['answer'])?$_POST['answer']:''; ?>