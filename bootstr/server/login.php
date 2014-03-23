<?php
include_once("server.php");
if (isset($_POST['email'])){
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
        exit ("Введите пожалуйста логин!");
    }
}
if (isset($_POST['password'])){
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
        exit ("Введите пароль");
    }
}
$email = stripslashes($email);
$email = htmlspecialchars($email);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$email = trim($email);
$password = trim($password);
$password = md5($password);//шифруем пароль
$query = "INSERT INTO users (password, email) VALUES ('$password', '$email')";
$result = mysql_query($query) or die(mysql_error());
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id_user['id'];
echo "<meta http-equiv='Refresh' content='0'; URL = 'index.php'>";
?>
