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
    <title>TeamSearch | Настройки</title>
</head>
<body style="opacity:0; transition: 1.5s;">
    <header class="header">
        <a href="profile.html"><div class="goto_profile">
            <div class="svg_arrow_down"></div>
            <img src="static/images/main/Profileicon.png" class="logo-h-and-w" width="73" height="73">
            <h1 class="main_goto_profile_text">Профиль</h1>
        </div></a>
        <div class="header_menu_box">
            <h1 class="header_menu"><a href="index.html">Главная</a></h1>
            <h1 class="header_menu"><a href="search.html">Поиск</a></h1>
            <h1 class="header_menu"><a href="shop.html">Магазин</a></h1>
        </div>
        <div class="logo__title">
            <img src="static/images/main/logo.png" width="75" height="68">
            <a href="index.html"><h1 class="teamsearch_logo">TeamSearch</h1></a>
        </div>
    </header>
    <div class="content-settings">
        <div class="column__one">
            <div class="section__one">
                <div style="width: 220px;">
                    <img src="static/images/profile/avatar.png" class="avatar" style="margin-bottom: 10px;">
                    <input type="file">
                </div>
                <div class="row__one">
                    <div class="microrow__one">
                        <input class="name-input" value="DIROZ" type="text">
                        <object style="margin-left: 12px;" type="image/svg+xml" data="static/images/settings/edit.svg" width="45" height="45"></object>
                    </div>
                    <div class="microrow__two">
                        <textarea class="desc-textarea">Таким образом начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки модели развития.</textarea>
                        <object style="margin-left: 12px;" type="image/svg+xml" data="static/images/settings/edit.svg" width="45" height="45"></object>
                    </div>
                </div>
            </div>
            <div class="section__two">
                <a href="profile.html"><div class="main-button">Сохранить</div></a>
            </div>
        </div>
    </div>
    <p class="not_supported">Недоступно для моб. устройств.</p>
    <p class="not_supported">Моб. версия сайта - <a href="https://m.teamsearch.ru">m.teamsearch.ru</a></p>
    <script>
        $(document).ready(function() {    
          $("body").css("opacity", "1");
        });
      </script>
</body>
</html>