
<h4>Выберите задание</h4>
<form method="get">
    <select name="selection">
        <?php
        $task_num = $_POST['task_num'];
        foreach ($task_num as $key => $value){
            if ($_GET['selection'] == $key){
                echo "<option value=\"".$key."\" selected>".$value[0]."</option>";
            } else {
                echo "<option value=\"" . $key . "\">" . $value[0] . "</option>";
            }
        }
        ?>
    </select>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_GET['selection'])) {
    include($task_num[$_GET['selection']][1]);
}
?>