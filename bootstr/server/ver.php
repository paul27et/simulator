<?php
include_once("server.php");

if (isset($_POST['submit'])){
    if(empty($_POST['password'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите пароль !">Input pass</font>';
    }
    elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" alt="Пароль слишком короткий!">Too short!</font>';
    }
    elseif(empty($_POST['email'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите E-mail!">Input Email! </font>';
    }
    elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail имеет недопустимий формат!">NO!</font>';
    }
        $password = $_POST['password'];
        $mdPassword = md5($password);
        $email = $_POST['email'];
        $query = "INSERT INTO users (password, email) VALUES ('$mdPassword', '$email')";
        $result = mysql_query($query) or die(mysql_error());;
}
?>