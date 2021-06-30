function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function check_empty(text)
{
  return text.replaceAll(/\s/g,'') == "";
}

function Signin() {
  var login = $(".login input:text").val();
  var password = $(".password input:text").val();
  $.post(
    "../api/signup.php", 
    {login: login, password: password, email: email},
    function(data) {
      console.log(data);
      if (data == "Success") {
        swal({
          title: "Поздравляем!", 
          text: "Вы были успешно авторизированны!",
          timer: 1000,
          button: false,
          icon: "success"
        }).then((value) => {
          window.location = "/login.php";
        })

        } else {
        swal("Упс!", "Кажется вы ввели неправильные данные!", "error");
      }
    }
  );
}

function Signup() {
  var login = $(".login input:text").val();
  var password = $(".password input:text").val();
  var password2 = $(".password2 input:text").val();
  var email = $(".email input:text").val();
  var checkbox = $(".checkbox").is(':checked');
  if (check_empty(email)) {
    swal("Упс!", "Email не может быть пустым", "error");
  }
  else if (check_empty(login)) {
    swal("Упс!", "Логин не может быть пустым", "error");
  }
  else if (check_empty(password)) {
    swal("Упс!", "Пароль не может быть пустым", "error");
  }
  else if (password != password2) {
    swal("Упс!", "Кажеться пароли которые вы ввели не совпадают!", "error");
  }
  else if (!checkbox) {
    swal("Упс!", "Вы не приняли правила пользования сайтом teamsearch.ru!", "error");
  }
  else {
    $.post(
      "../api/signup.php", 
      {login: login, password: password, email: email},
      function(data) {
        console.log(data);
        if (data == "Success") {
          swal({
            title: "Поздравляем!", 
            text: "Вы были успешно зарегистрированы",
            timer: 1000,
            button: false,
            icon: "success"
          }).then((value) => {
            window.location = "/login.php";
          })

          } else {
          swal("Упс!", "Кажется пользователь с таким логином уже существует", "error");
        }
      }
    );
  }
}
