<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.css" media="screen">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="bootstrap3/js/bootstrap.js"></script>
    <script src="js/TweenLite.min.js"></script>
    <title>Вход в систему</title>
</head>
<style>
    body{
        background: url(img/back.png);
        background-color: #444;
        background: url(img/pinlayer2.png),url(img/pinlayer1.png),url(img/back.png);
    }

    .vertical-offset-100{
        padding-top:100px;
    }
</style>
<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" id="loginform">
                <div class="panel-heading">
                    <h3 class="panel-title">Войдите, пожалуйста</h3>
                </div>
                <div class="panel-body">
                    <form action="testreg.php" method="post" accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Логин" name="login" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Пароль" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Войти">
                        </fieldset>
                    </form>
                    <a href="reg.php" role="button" class="btn btn-lg btn-info btn-block">Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script language="JavaScript">
    $(document).ready(function(){
        $('#loginform').draggable();
        $(document).mousemove(function(e){
            TweenLite.to($('body'),
                .5,
                { css:
                {
                    'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
                }
                });
        });
    });
</script>