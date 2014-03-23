<?php include_once("server/server.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Симулятор бомжа</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style>
    #loginform{
        position: absolute;
        top: 30%;
        left: 30%;
    }
</style>
<body>
<div id="loginform">
    <form action="server/login.php" method="post" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
                <input type="text" placeholder="Email" name="email">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Пароль</label>
            <div class="controls">
                <input type="password" placeholder="Пароль" name="password">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox"> Запомнить меня
                </label>
                <button type="submit" class="btn" id="enter">Войти</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>