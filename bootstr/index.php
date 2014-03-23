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
<body>

<div class="container">
    <fieldset>
        <legend>Жизненные показатели</legend>
        <div id="Life">
            <label for="hp">Здоровье</label>
            <div class="progress progress-striped" id="hp">
                <div class="bar" style="width: 50%;"></div>
            </div>

            <label for="mood">Настроение</label>
            <div class="progress progress-striped" id="mood">
                <div class="bar" style="width: 50%;"></div>
            </div>

            <label for="eat">Сытость</label>
            <div class="progress progress-striped" id="eat">
                <div class="bar" style="width: 50%;"></div>
            </div>

            <label for="xp">Уровень</label>
            <div class="progress progress-striped" id="xp">
                <div class="bar" style="width: 0%;"></div>
            </div>
        </div>
        <legend>Денежные махинации</legend>
        <div id ="Money">
            <p>Рубли: <output id="rubles"></output></p>
            <p>Валюта: <output id="ye"></output></p>
            <p>Курс обмена валюты: <output id="course"></output></p>
            <div id = "valute">
                <input type="number" id="value">
                <button class="btn" type="button" id="trading">Обменять все</button>
            </div>
            <div class="alert-error" id="notenoughmoney" style="display: none">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Предупреждение!</strong> Недостаточно денег. Иди работай!
            </div>
            <!--<div class="input-append">
                <input class="span2" id="trade" size="16" type="text"><button class="btn" type="button" id="trading">Обменять все</button>
            </div>-->
        </div>
    </fieldset>
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Пожрать</a></li>
            <li><a href="#tab2" data-toggle="tab">Выпить</a></li>
            <li><a href="#tab3" data-toggle="tab">Подработать</a></li>
            <li><a href="#tab4" data-toggle="tab">Бомжатничать</a></li>
            <li><a href="#tab5" data-toggle="tab">Оздоровительные процедуры</a></li>
            <li><a href="#tab6" data-toggle="tab">Учеба и рейтинг</a></li>
            <li><a href="#tab7" data-toggle="tab">Недвижимость и транспорт</a></li>
            <li><a href="#tab8" data-toggle="tab">Бизнес и охрана</a></li>
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
                            <button id="restaraunt" name="food" class="btn">Жениться(10000р./день)</button>
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
                            <button id="wisky" name="drink" class="btn">Двойной виски в баре(500р.)</button>
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
                    <div id="work">
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

    function courseUpdate(){
        course = 40 + (Math.random()*9|0);
        $('#course').val(course);
    }
    $(function(){
        $('button').on('click', function(event){
            var target = $(event.target);
            if(target.is('#trash')){
                var hp = document.getElementById("hp").children[0].style.width;
                hp = Number(hp.substring(0, hp.length-1));
                document.getElementById("hp").children[0].style.width = hp - Math.random()*6 + '%';

                var eat = document.getElementById("eat").children[0].style.width;
                eat = Number(eat.substring(0, eat.length-1));
                document.getElementById("eat").children[0].style.width = eat + Math.random()*6 + '%';
                courseUpdate();
            }
            else if(target.is('#hotdog')){
                var eat = document.getElementById("eat").children[0].style.width;
                eat = Number(eat.substring(0, eat.length-1));
                document.getElementById("eat").children[0].style.width = eat + Math.random()*12 + '%';
                courseUpdate();

            }
            else if(target.is('#beer')){
                var mood = document.getElementById("mood").children[0].style.width;
                mood = Number(mood.substring(0, mood.length-1));
                document.getElementById("mood").children[0].style.width = mood + Math.random()*6 + '%';
                courseUpdate();
                rubles += 100;
                $('#rubles').val(rubles);
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