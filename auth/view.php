
<h2>Авторизация</h2>
<form method="post" >
    <input type="text" name="email" placeholder="Введите Ваш E-mail"><br>
    <input type="password" name="pass" placeholder="Введите пароль"><br>
    <input type="submit" name="submit">
</form>
<?php echo isset($_POST['answer'])?$_POST['answer']:''; ?>