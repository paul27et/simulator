<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Bootstrap</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<style>

    body{
        margin: 0;
        background-image: url(img/bg3.jpg);
        background-size: 2560px 1440px;
        background-repeat:no-repeat;
        display: compact;
        font: 13px/18px "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

</style>

<body>
<!-- ВСПЛЫВАЮЩЕЕ ОКНО -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Правила и цели</h3>
    </div>
    <div class="modal-body">
        <p>*КУЧАТЕКСТА"</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    </div>
</div>

<div class="modal" id="crime" tabindex="-1" role="dialog" aria-labelledby="crimeLabel" aria-hidden="true" style="display: none">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="crimeLabel">Вы арестованы!</h3>
    </div>
    <div class="modal-body">
        <p>Именем закона! Вы оштрафованы на 200000 рублей!</p>
    </div>
    <div class="modal-footer">
        <button id="crimeClose" class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    </div>
</div>


<div class="container">
<?php
$link = mysql_connect('localhost', 'root', 'pass');
if(!$link){
die('Error!'.mysql_error());
}
mysql_select_db("login", $link);
echo "Вы вошли на сайт, как ".$_SESSION['login'];
?>
    <fieldset>
        <legend style="margin-bottom: 7px">Жизненные показатели</legend>
        <div class="row">
            <div class="span6">
                <div id="life">
                    <label for="hp" style="margin-bottom: 1px">Здоровье</label>
                    <div class="progress progress-striped" id="hp" style="margin-bottom: 7px">
                        <div class="bar" style="width: 50%;"></div>
                    </div>
                    <label for="mood" style="margin-bottom: 1px">Настроение</label>
                    <div class="progress progress-striped" id="mood" style="margin-bottom: 7px">
                        <div class="bar" style="width: 50%;"></div>
                    </div>
                    <label for="eat" style="margin-bottom: 1px">Сытость</label>
                    <div class="progress progress-striped" id="eat" style="margin-bottom: 7px">
                        <div class="bar" style="width: 50%;"></div>
                    </div>
                    <label for="xp" style="margin-bottom: 1px">Уровень</label>
                    <div class="progress progress-striped" id="xp" style="margin-bottom: 7px">
                        <div class="bar" style="width: 0%;"></div>
                    </div>
                </div>
            </div>
            <div class="span6">
                Жизненный прогресс
                <div id="progress">
                    <div class="alert alert-success" id="wifeAlert" style="color: #808080; background-color: lightgray; height: 15px; padding: 3px 35px 8px 14px; margin-bottom: 7px">
                        <output id="wifeAlertText">Вы не женаты.</output>
                    </div>
                    <div class="alert alert-success" id="alcoholAlert" style="color: #808080; background-color: lightgray; height: 15px; padding: 3px 35px 8px 14px; margin-bottom: 6px">
                        <output id="alcoholAlertText">Вы ведете трезвый образ жизни.</output>
                    </div>
                    <div class="alert alert-success" id="coachAlert" style="color: #808080; background-color: lightgray; height: 15px; padding: 3px 35px 8px 14px; margin-bottom: 6px">
                        <output id="coachAlertText">У вас нет личного тренера для занятий спортом.</output>
                    </div>
                    <div class="alert alert-success" id="smthAlert" style="color: #808080; background-color: lightgray; height: 15px; padding: 3px 35px 8px 14px; margin-bottom: 7px">
                        <output id="smthAlertText">У вас чего-то нет.</output>
                    </div>
                    <div class="alert alert-success" id="smth2Alert" style="color: #808080; background-color: lightgray; height: 15px; padding: 3px 35px 8px 14px">
                        <output id="smth2AlertText">У вас чего-то нет.</output>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <legend style="margin-bottom: 7px">Денежные махинации</legend>
                <div id ="money">
                    <p>Рубли: <output id="rubles"></output></p>
                    <p>Валюта: <output id="ye"></output></p>
                    <p>Курс обмена валюты: <output id="course"></output></p>
                    <div id = "valute">
                        <input type="number" id="value">
                        <button class="btn" type="button" id="trading" style="margin-bottom: 11px">Обменять все</button>
                    </div>
                    <div class="alert-error" id="notenoughmoney" style="display: none" onclick="document.getElementById('notenoughmoney').style.display = 'none'">
                        <button type="button" class="hide" data-dismiss="alert">&times;</button>
                        <strong>Предупреждение!</strong> Недостаточно денег. Иди работай!
                    </div>
                </div>
            </div>
            <div class="span6">
                <legend style="margin-bottom: 7px">Важная информация</legend>
                <a href="#myModal" role="button" class="btn btn-info pull-right" data-toggle="modal">Правила и цели</a>
                <button id="save" class="btn btn-info pull-right">Сохранить</button>
                <p>День №: <output id="day">1</output></p>
            </div>
        </div>
    </fieldset>
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab"><img src="img/glyph/48-fork-and-knife.png"/></a></li>
            <li><a href="#tab2" data-toggle="tab"><img src="img/glyph/88-beer-mug.png"/></i></a></li>
            <li><a href="#tab3" data-toggle="tab"><img src="img/glyph/181-hammer.png"/></a></li>
            <li><a href="#tab4" data-toggle="tab"><img src="img/glyph/132-ghost.png"/></a></li>
            <li><a href="#tab5" data-toggle="tab"><img src="img/glyph/63-runner.png"/></a></li>
            <li><a href="#tab6" data-toggle="tab"><img src="img/glyph/140-gradhat.png"/></a></li>
            <li><a href="#tab7" data-toggle="tab"><img src="img/glyph/178-city.png"/></a></li>
            <li><a href="#tab8" data-toggle="tab"><img src="img/glyph/37-suitcase.png"/></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <fieldset>
                    <div id="food">
                        <p><div class="btn-group">
                            <button id="trash" name="food" class="btn">Пожрать на помойке(0р.)</button>
                            <button id="hotdog" name="food" class="btn">Сожрать хот-дог(100р.)</button>
                            <button id="uzbek" name="food" class="btn">Покушать в узбечке(500р.)</button>
                        </div>
                        <p><div class="btn-group">
                            <button id="foods" name="food" class="btn">Закупить продуктов и покушать(3000р.)</button>
                            <button id="wife" name="food" class="btn">Жениться(10000р./день)</button>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab2">
                <fieldset>
                    <div id="drink">
                        <p><div class="btn-group">
                            <button id="beer" name="drink" class="btn">Выпить пивасика(50р.)</button>
                            <button id="vodka" name="drink" class="btn">Напиться водки(200р.)</button>
                            <button id="whisky" name="drink" class="btn">Двойной виски в баре(500р.)</button>
                        </div>
                        <p><div class="btn-group">
                            <button id="hennessey" name="drink" class="btn">Хеннесси Х.О.(1500р.)</button>
                            <button id="bar" name="drink" class="btn">Бухать каждый день($2000/день)</button>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab3">
                <fieldset>
                    <div id="work" style="height: 320px">
                        <p><div class="btn-group">
                            <button id="wash" name="work" class="btn">Мыть машины на стоянке</button>
                            <button id="yard" name="work" class="btn">Мести дворы</button>
                            <button id="techno" name="work" class="btn">Работать сантехником</button>
                            <button id="factory" name="work" class="btn">Работать на заводе</button>
                        </div>
                        <p><div class="btn-group">
                            <button id="office" name="work" class="btn">Работать в офисе</button>
                            <button id="company" name="work" class="btn">Управлять компанией</button>
                            <button id="inn" name="work" class="btn">Заработать на бирже</button>
                            <button id="action" name="work" class="btn">Махинации с акциями</button>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab4">
                <fieldset>
                    <div id="trashing">
                        <legend>Бомжатничать</legend>
                        <p><div class="btn-group">
                            <button id="yardt" name="trashing" class="btn">Во дворе</button>
                            <button id="pereh" name="trashing" class="btn">В переходе</button>
                            <button id="market" name="trashing" class="btn">У магазина</button>
                            <button id="center" name="trashing" class="btn">В центре</button> <br>
                        </div>
                        <legend>Поборы</legend>
                        <p><div class="btn-group">
                            <button id="coins" name="trashing" class="btn">Искать монеты на улице</button>
                            <button id="fuckfriend" name="trashing" class="btn">Наехать на собутыльника</button>
                            <button id="taxi" name="trashing" class="btn">Таксовать на авто</button>
                            <button id="steal" name="trashing" class="btn">Ограбить прохожего</button>
                            <button id="burglar" name="trashing" class="btn">Ограбить банк</button>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab5">
                <fieldset>
                    <div id="health">
                        <legend>Поднять здоровье</legend>
                        <p><div class="btn-group">
                        <button id="tabs" name="health" class="btn">Таблетки с помойки(0р.)</button>
                        <button id="grandma" name="health" class="btn">Полечиться у бабки(100р.)</button>
                        <button id="doctor" name="health" class="btn">Настоящий доктор(500р.)</button>
                        <button id="clinic" name="health" class="btn">Нормальная клиника(3000р.)</button><br>
                        <button id="foreign" name="work" class="btn">Лечиться за границей(100000р.)</button>
                    </div>
                        <legend>Занятия спортом</legend>
                        <p><div class="btn-group">
                        <button id="jogging" name="work" class="btn">Совершить пробежку</button>
                        <button id="gym" name="work" class="btn">Записаться в спортзал(1500р./месяц)</button>
                        <button id="coach" name="work" class="btn">Личный тренер($2000/месяц)</button>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab6">
                <fieldset>
                    <div id="rating">
                        <legend>Учиться</legend>
                        <p><div class="btn-group">
                        <button id="multiply" name="health" class="btn">Выучить таблицу умножения(150р.)</button>
                        <button id="school" name="health" class="btn">Окончить школу(5000р.)</button>
                        <button id="college" name="health" class="btn">Окончить ПТУ(25000р.)</button>
                        <button id="university" name="health" class="btn">Окончить ПТУ(200000р.)</button><br>
                        <button id="foreignstudy" name="work" class="btn">Учиться за границей(1 млн. р.)</button>
                    </div>
                        <legend>Рейтинг</legend>
                        <p><div class="btn-group">
                        <button id="club" name="work" class="btn">Затусить в клубе(1000р.)</button>
                        <button id="smoking" name="work" class="btn">Купить костюм(50000р.)</button>
                        <button id="advert" name="work" class="btn">Снять рекламу($10000)</button>
                        <button id="concurents" name="work" class="btn">Купить конкурентов($5 млн.)</button>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab7">
                <fieldset>
                    <div id="health">
                        <legend>Поднять здоровье</legend>
                        <p><div class="btn-group">
                        <button id="tabs" name="health" class="btn">Таблетки с помойки(0р.)</button>
                        <button id="grandma" name="health" class="btn">Полечиться у бабки(100р.)</button>
                        <button id="doctor" name="health" class="btn">Настоящий доктор(500р.)</button>
                        <button id="clinic" name="health" class="btn">Нормальная клиника(3000р.)</button><br>
                        <button id="foreign" name="work" class="btn">Лечиться за границей(100000р.)</button>
                    </div>
                        <legend>Занятия спортом</legend>
                        <p><div class="btn-group">
                        <button id="jogging" name="work" class="btn">Совершить пробежку</button>
                        <button id="gym" name="work" class="btn">Записаться в спортзал(1500р./месяц)</button>
                        <button id="coach" name="work" class="btn">Личный тренер($2000/месяц)</button>
                    </div>
                    </div>
                </fieldset>
            </div>
            <div class="tab-pane" id="tab8">
                <fieldset>
                    <div id="health">
                        <legend>Поднять здоровье</legend>
                        <p><div class="btn-group">
                        <button id="tabs" name="health" class="btn">Таблетки с помойки(0р.)</button>
                        <button id="grandma" name="health" class="btn">Полечиться у бабки(100р.)</button>
                        <button id="doctor" name="health" class="btn">Настоящий доктор(500р.)</button>
                        <button id="clinic" name="health" class="btn">Нормальная клиника(3000р.)</button><br>
                        <button id="foreign" name="work" class="btn">Лечиться за границей(100000р.)</button>
                    </div>
                        <legend>Занятия спортом</legend>
                        <p><div class="btn-group">
                        <button id="jogging" name="work" class="btn">Совершить пробежку</button>
                        <button id="gym" name="work" class="btn">Записаться в спортзал(1500р./месяц)</button>
                        <button id="coach" name="work" class="btn">Личный тренер($2000/месяц)</button>
                    </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>

<script language="JavaScript">

    $('#course').val(45);
    var course = $('#course').val();
    $('#rubles').val(200);
    var rubles = $('#rubles').val();
    $('#ye').val(0);
    var ye = $('#ye').val();
    var day = 1;
    var wife = false;
    var alcohol = false;
    var coach = false;

    $('#action').popover({
        animation: true,
        placement: 'bottom',
        trigger: 'hover',
        title: 'Обратите внимание!',
        content: 'Это действие противозаконно, возможно наложение штрафа размером 200000 руб.!'
    });

    function rublesEnough(cost){
        if(rubles < cost){
            $('#notenoughmoney').show();
        }
        return rubles >= cost;
    }
    function courseUpdate(){
        course = 40 + (Math.random()*9|0);
        $('#course').val(course);
    }
    function xpInc(){
        var xp = document.getElementById("xp").children[0].style.width;
        xp = Number(xp.substring(0, xp.length-1));
        document.getElementById("xp").children[0].style.width = xp + Number(0.1) + '%';
    }
    function hpInc(val){
        var hp = document.getElementById("hp").children[0].style.width;
        hp = Number(hp.substring(0, hp.length-1));
        document.getElementById("hp").children[0].style.width = hp + Math.random()*val + '%';
    }
    function eatInc(val){
        var eat = document.getElementById("eat").children[0].style.width;
        eat = Number(eat.substring(0, eat.length-1));
        document.getElementById("eat").children[0].style.width = eat + Math.random()*val + '%';
    }
    function moodInc(val){
        var mood = document.getElementById("mood").children[0].style.width;
        mood = Number(mood.substring(0, mood.length-1));
        document.getElementById("mood").children[0].style.width = mood + Math.random()*val + '%';
    }
    function nextDay(){
        day++;
        $('#day').val(day);
    }
    function wifeExist(){
        if(wife == true){
            $('#wife').attr('disabled', true);
            eatInc(17);
            subMoney(10000);
        }
    }
    function alcoholExist(){
        if(alcohol == true){
            $('#bar').attr('disabled', true);
            moodInc(10);
            subMoney(60000);
        }
    }
    function coachExist(){
        if(coach == true){
            $('#coach').attr('disabled', true);
            hpInc(17);
            subMoney(3000);
        }
    }
    function subMoney(cost){
        rubles = Number(rubles) - cost;
        $('#rubles').val(rubles);
    }

    $(function(){

        $('button').on('click', function(event){
            var target = $(event.target);
            rublesEnough();
            //ЖРАТ!
            if(target.is('#trash')){
                wifeExist();
                alcoholExist();
                coachExist();
                hpInc(-6);
                eatInc(6);
                xpInc();
                courseUpdate();
                nextDay();
            }
            else if(target.is('#hotdog')){
                if(rublesEnough(100)){
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    eatInc(10);
                    xpInc();
                    subMoney(100);
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#uzbek')){
                if(rublesEnough(500)){
                    subMoney(500);
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    eatInc(13);
                    xpInc();
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#foods')){
                if(rublesEnough(3000)){
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    eatInc(15);
                    xpInc();
                    subMoney(3000);
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#wife')){
                $('#wifeAlertText').val('Вы женаты');
                $('#wifeAlert').css({'color':'green',
                                     'background-color': 'lightgreen'});
                wife = true;
                wifeExist();
                alcoholExist();
                coachExist();
                eatInc(10);
                xpInc();
                courseUpdate();
                nextDay();
            }
            //Напитки!
            else if(target.is('#beer')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(3);
                hpInc(-2);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-100);
            }
            else if(target.is('#vodka')){
                if(rublesEnough(200)){
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    moodInc(6);
                    hpInc(-7);
                    xpInc();
                    subMoney(200);
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#whisky')){
                if(rublesEnough(500)){
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    moodInc(9);
                    hpInc(-4);
                    xpInc();
                    subMoney(500);
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#hennessey')){
                if(rublesEnough(1500)){
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    moodInc(11);
                    hpInc(-2);
                    xpInc();
                    subMoney(1500);
                }
                courseUpdate();
                nextDay();
            }
            else if(target.is('#bar')){
                $('#alcoholAlertText').val('Вы бухаете каждый день. Постыдылись бы.');
                $('#alcoholAlert').css({'color':'green',
                                        'background-color': 'lightgreen'});
                alcohol = true;
                wifeExist();
                alcoholExist();
                coachExist();
                xpInc();
                moodInc(10);
                courseUpdate();
                nextDay();
            }
            //Подработка!
            else if(target.is('#wash')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-2);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-200);
            }
            else if(target.is('#yard')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-3);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-500);
            }
            else if(target.is('#techno')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-5);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-2000);
            }
            else if(target.is('#factory')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-6);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-5000);
            }
            else if(target.is('#office')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-9);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-10000);
            }
            else if(target.is('#company')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-1);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-20000);
            }
            else if(target.is('#inn')){
                wifeExist();
                alcoholExist();
                coachExist();
                moodInc(-10);
                xpInc();
                courseUpdate();
                nextDay();
                subMoney(-100000);
            }
            else if(target.is('#action')){
                if(Math.floor(Math.random()*2) == 1)
                {
                    //alert("Вы были оштрафованы за незаконные махинации с акциями! Лошара =D");
                    $('#crime').modal();
                    subMoney(200000);
                }
                else
                {
                    wifeExist();
                    alcoholExist();
                    coachExist();
                    moodInc(-10);
                    xpInc();
                    courseUpdate();
                    nextDay();
                    subMoney(-200000);
                }
            }
            else if(target.is('#crimeClose')){
                $('#crime').hide();
            }
            //Тренировки!
            else if(target.is('#coach')){
                $('#coachAlertText').val('У вас есть личный тренер. А вам это точно надо?');
                $('#coachAlert').css({'color':'green',
                                      'background-color': 'lightgreen'});
                coach = true;
                wifeExist();
                alcoholExist();
                coachExist();
                hpInc(10);
                xpInc();
                courseUpdate();
                nextDay();
            }
            else if(target.is('#trading')){
                if(Number(rubles)<Number(course)){
                    $('#notenoughmoney').show();
                }
                else{
                    ye = ye + rubles/course|0;
                    $('#ye').val(ye);
                    rubles = rubles%course;
                    $('#rubles').val(rubles);
                }
            }
        })

    })
</script>
</body>
</html>