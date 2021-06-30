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
<?php
include "./api/general_functionality/get_user_data.php";

$connection = new SQLITE3("database.db");
$user = get_user_data_by_login($connection, $_SESSION["login"]);
unset($connection);
?>

<body style="opacity:0; transition: 1.5s;">
  <header class="header">
    <a href="profile.html">
      <div class="goto_profile">
        <div class="svg_arrow_down"></div>
        <img src="static/images/main/Profileicon.png" class="logo-h-and-w" width="73" height="73">
        <h1 class="main_goto_profile_text">Профиль</h1>
      </div>
    </a>
    <div class="header_menu_box">
      <h1 class="header_menu"><a href="index.html">Главная</a></h1>
      <h1 class="header_menu"><a href="search.html">Поиск</a></h1>
      <h1 class="header_menu"><a href="shop.html">Магазин</a></h1>
    </div>
    <div class="logo__title">
      <img src="static/images/main/logo.png" width="75" height="68">
      <a href="index.html">
        <h1 class="teamsearch_logo">TeamSearch</h1>
      </a>
    </div>
  </header>
  <div class="content-settings">
    <div class="column__one">
      <div class="section__one">
        <div class="input-avatar" style="width: 220px;">
          <img src="static/images/profile/avatar.png" class="avatar" style="margin-bottom: 10px;">
          <input type="file">
        </div>
        <div class="row__one">
          <div class="microrow__one">
            <input class="name-input" value="<?php echo $user[login] ?>" type="text">
            <object style="margin-left: 12px;" type="image/svg+xml" data="static/images/settings/edit.svg" width="45" height="45"></object>
          </div>
          <div class="microrow__two">
            <textarea class="desc-textarea">Таким образом начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки модели развития.</textarea>
            <object style="margin-left: 12px;" type="image/svg+xml" data="static/images/settings/edit.svg" width="45" height="45"></object>
          </div>
        </div>
      </div>
      <div class="section__two">
        <a href="#">
          <div class="main-button">Сохранить</div>
        </a>
      </div>
      <canvas style="overflow: hidden;" id="canvas" width="300" height="300"></canvas>
    </div>
  </div>
  <p class="not_supported">Недоступно для моб. устройств.</p>
  <p class="not_supported">Моб. версия сайта - <a href="https://m.teamsearch.ru">m.teamsearch.ru</a></p>
  <script>
    $(document).ready(() => {
      $("body").css("opacity", "1");
      $(".main-button").click(() => {
        console.log("[teamsearch] Save button was clicked");
        let new_login = $(".name-input").val();
        let new_description = $(".desc-textarea").val();
        let new_image = $(".input-avatar input")[0].files[0];
        $.post({
          "/api/settings_apply.php",
          {
            new_login: new_login,
            new_description: new_description,
            new_image: new_image
          },
          (data) => {
            if (data == "Success") {
              swal("Все изменения были применены", {
                icon: "success",
                buttons: false,
                timer: 1000
              }).then((value) => {
                window.location = "/profile.php?login=" + new_login;
              });
            } else {
              swal("Упс...", "Кажеться пользователь с таким логином уже существует...");
            }
          }
        });
      });
    });
  </script>
</body>

</html>