<?php
/**
@brief Функция для старта сессии.
@detailed Вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
 */
session_start();
/**
 * @brief Заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
 */
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
/**
 * @brief Заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 */

/**
 * @brief Если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
 */
if (empty($login) or empty($password)){
    setcookie("test", 0);
    $index = '/client/index.php';
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/$index");
}

/**
 * @brief Если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
 */
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
/**
 * @brief Удаляем лишние пробелы
 */
$login = trim($login);
$password = trim($password);

/**
@brief Подключение к базе данных
@param server Сервер базы данных
@param login Имя пользваотеля для подключения к базе
@param password Пароль для подключения к базе
 */

$link = mysql_connect('localhost', 'root', 'pass');
if(!$link){
    die('Error!'.mysql_error());
}
mysql_select_db("login", $link);
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$link); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);

if (empty($myrow['password']))
{
    /**
     * @brief Если пользователя с введенным логином не существует
     */
    $index = '../index.php';
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/$index?test=0");
}
else {
    /**
     * @brief Если существует, то сверяем пароли
     */
    if ($myrow['password']==$password) {
        /**
         * @brief Если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
         */
        $_SESSION['login']=$myrow['login'];
        $_SESSION['id']=$myrow['id'];
        echo "Вы успешно вошли на сайт!";
        $main = '../client/main.php';
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/$main?test=0");
    }
    else {
        /**
         * @brief Если пароли не сошлись
         */
        $index = '../index.php';
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/$index?test=0");
    }
}
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Вход в систему</title>
</head>