<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="static/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="static/css/null.css">
    <link rel="stylesheet" href="static/css/second.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/signup-login-adaptive.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script> -->
    <title>TeamSearch | Регистрация</title>
</head>
<body style="opacity:0; transition: 1.5s;">
    <header class="header-signup">
        <div class="logo__signup">
            <img src="static/images/main/logo.png" width="75" height="68">
            <a href="/index"><h1 class="teamsearch_logo_reg">TeamSearch</h1></a>
        </div>
    </header>
    <div class="content-signup">
        <div class="section">
            <h1>Перед пользованием сайтом необходимо</h1>
            <p>Пройти регистрацию.</p>
            <div class="ad-reg"></div>
        </div>
        <div class="registration-section">
            <div class="email section__two">
                <h4 class="three">Почта:</h4>
                <input type="text" placeholder="email@example.ru">
            </div>
            <div class="login section__two">
                <h4 class="two">Логин:</h4>
                <input type="text" placeholder="example">
            </div>
            <div class="password section__two">
                <h4 class="one">Пароль:</h4>
                <input type="text" placeholder="password">
            </div>
            <div class="password2 section__two six">
                <h4>Повт. пароля:</h4>
                <input type="text" placeholder="password">
            </div>
            <div class="or">
                <div class="four">
                    <div class="line"></div>
                    <h5 class="line-text">или</h5>
                    <div class="line"></div>
                </div>
                <div class="five">
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/VK.svg" width="27" height="27"></object>
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/GOOGLE.svg" width="27" height="27"></object>
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/Yandex.svg" width="27" height="27"></object>
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/Facebook.svg" width="27" height="27"></object>
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/Twitter.svg" width="27" height="27"></object>
                    <object class="icons" type="image/svg+xml" data="static/images/signup-login/Instagram.svg" width="27" height="27"></object>
                </div>
            </div>
            <div class="section__two" style="flex-direction: column;">
                <a href="javascript:Signup()"><button>Регистрация</button></a>
                <div style="display: flex;"><input class="checkbox" type="checkbox" style="margin-bottom: 15px;"><label style="line-height: 20px;">Я соглашаюсь со всеми <a href="https://vk.com/topic-156698620_42085360">правилами пользования сайтом</a></label></div>
            </div>
            <h5 class="or_login-register">Если у вас уже есть аккаунт - <a href="/login.php">авторизуйтесь</a></h5>
            <div class="ad-adaptive"></div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
          $("body").css("opacity", "1");
        });
      </script>

      <script src="static/js/authorization/check_sign-in-up.js"></script>
    <p class="not_supported">Недоступно для моб. устройств.</p>
    <p class="not_supported">Моб. версия сайта - <a href="https://m.teamsearch.ru">m.teamsearch.ru</a></p>
</body>
</html>
