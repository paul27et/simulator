<?php
session_start();

$link = mysql_connect('localhost', 'root', 'pass');
if(!$link){
    die('Error!'.mysql_error());
}
echo 'Success!';
mysql_select_db("bomj");

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];

