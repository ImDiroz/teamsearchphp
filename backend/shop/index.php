<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="static/css/null.css">
    <link rel="stylesheet" href="static/css/second.css">
    <link rel="stylesheet" href="static/css/after-register.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <title>TeamSearch | Подписки</title>
</head>
<body style="opacity:0; transition: 1.5s;">
    <div class="conf-popup" id="confpopup">
        <div class="conf-popup-content">
            <h1 style="margin-bottom: 10px;">Вы действительно хотите купить этот тариф?</h1>
            <h2 style="margin-bottom: 19px;">(это действие нельзя отменить)</h2>
            <h1 style="margin-bottom: 5px;">Для подтверждения:</h1>
            <h1 style="margin-bottom: 5px;">1. Поставьте отметку, что Вы действительно согласны с покупкой</h1>
            <h1 style="margin-bottom: 130px;">2. Нажмите на кнопку “Купить”</h1>
            <label><input type="checkbox" style="margin-bottom: 15px;">Я подтверждаю данную покупку</label>
            <div class="main-button" style="margin: 0 auto; margin-bottom: 10px;">Купить</div>
            <a href="javascript:PopUpHide()">Я передумал</a>
        </div>
    </div>
    <header class="header">
        <a href="profile.html"><div class="goto_profile">
            <div class="svg_arrow_down"></div>
            <img src="static/images/main/Profileicon.png" class="logo-h-and-w" width="73" height="73">
            <h1 class="main_goto_profile_text">Профиль</h1>
        </div></a>
        <div class="header_menu_box">
            <h1 class="header_menu"><a href="index.html">Главная</a></h1>
            <h1 class="header_menu"><a href="search.html">Поиск</a></h1>
            <h1 class="header_menu active">Магазин</h1>
        </div>
        <div class="logo__title">
            <img src="static/images/main/logo.png" width="75" height="68">
            <a href="index.html"><h1 class="teamsearch_logo">TeamSearch</h1></a>
        </div>
    </header>
    <div class="donate__content">
        <a class="balance__block" href="pay.html" target="_blank"><div>
            <p>Баланс: 1500₽</p>
            <object type="image/svg+xml" data="static/images/donate/plus.svg" width="21" height="21"></object></a>
        </div>
        <div style="display: flex;">
            <div class="donate-card-good">
                <div class="row__one">
                    <h1>Тариф<h2>VIP</h2></h1>
                </div>
                <h3>7 дней</h3>
                <div class="row__two">
                    <p>- Свой значок VIP в профиле</p>
                    <p>- Можно выкладывать VIP посты </p>
                    <p>- Вашу жалобу быстрее рассмотрят</p>
                    <p>- Вы первые узнаете о тестах новых функций</p>
                    <p>- Возможность лично общаться с создателями проекта в личных сообщениях</p>
                </div>
                <div class="row__three">
                    <div onclick="PopUpShow()" class="main-button">99 рублей</div>
                </div>
            </div>
            <div class="donate-card-better">
                <div class="row__one">
                    <h1>Тариф<h2>VIP</h2></h1>
                </div>
                <h3>30 дней</h3>
                <div class="row__two">
                    <p>- Свой значок VIP в профиле</p>
                    <p>- Можно выкладывать VIP посты </p>
                    <p>- Вашу жалобу быстрее рассмотрят</p>
                    <p>- Вы первые узнаете о тестах новых функций</p>
                    <p>- Возможность лично общаться с создателями проекта в личных сообщениях</p>
                </div>
                <div class="row__three">
                    <div onclick="PopUpShow()" class="main-button">149 рублей</div>
                </div>
            </div>
            <div class="donate-card-best">
                <div class="row__one">
                    <h1>Тариф<h2>VIP</h2></h1>
                </div>
                <h3>365 дней</h3>
                <div class="row__two">
                    <p>- Свой значок VIP в профиле</p>
                    <p>- Можно выкладывать VIP посты </p>
                    <p>- Вашу жалобу быстрее рассмотрят</p>
                    <p>- Вы первые узнаете о тестах новых функций</p>
                    <p>- Возможность лично общаться с создателями проекта в личных сообщениях</p>
                </div>
                <div class="row__three">
                    <div onclick="PopUpShow()" class="main-button">499 рублей</div>
                </div>
            </div>
        </div>
        <div class="ad"></div>
    </div>
    <p class="not_supported">Недоступно для моб. устройств.</p>
    <p class="not_supported">Моб. версия сайта - <a href="https://m.teamsearch.ru">m.teamsearch.ru</a></p>
    <script>
        $(document).ready(function() {    
          $("body").css("opacity", "1");
        });
    </script>
    <script src="static/js/donate/popup.js"></script>
</body>
</html>