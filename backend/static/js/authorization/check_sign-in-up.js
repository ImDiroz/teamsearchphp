/**
 * sleeps the selected amount of time
 * @param {*} ms amount of miliseconds
 * @returns promise
 */
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

/**
 * check if text contains whitespaces only
 * @param {*} text text check
 * @returns bool
 */
function check_empty(text) {
  return text.replaceAll(/\s/g, '') == "";
}

/**
 * sign in teamsearch account
 */
function Signin() {
  // get all values from `input` tags
  var login = $(".login input:text").val();
  var password = $(".password input:text").val();
  var checkbox = $(".checkbox").is(':checked');

  // check if checkbox was clicked
  if (!checkbox) {
    swal("Упс!", "Вы не приняли правила пользования сайтом teamsearch.ru!", "error");
  } else {
    // make post request to teamsearch api
    $.post(
      "../api/signin.php",
      { login: login, password: password },
      function (data) {
        console.log(data);
        if (data == "Success") {
          swal({
            title: "Поздравляем!",
            text: "Вы были успешно авторизированны!",
            timer: 1000,
            button: false,
            icon: "success"
          }).then((value) => {
            window.location = "/profile.php?login=" + login;
          })

        } else {
          swal("Упс!", "Кажется вы ввели неправильные данные!", "error");
        }
      }
    );
  }
}

/**
 * sign up teamsearch account
 */
function Signup() {
  // get all values from `input` html tags
  var login = $(".login input:text").val();
  var password = $(".password input:text").val();
  var password2 = $(".password2 input:text").val();
  var email = $(".email input:text").val();
  var checkbox = $(".checkbox").is(':checked');

  // check if email is empty
  if (check_empty(email)) {
    swal("Упс!", "Email не может быть пустым", "error");
  }

  // check if login is empty
  else if (check_empty(login)) {
    swal("Упс!", "Логин не может быть пустым", "error");
  }

  // check if password is empty
  else if (check_empty(password)) {
    swal("Упс!", "Пароль не может быть пустым", "error");
  }

  // check if first password is equals to second password
  else if (password != password2) {
    swal("Упс!", "Кажеться пароли которые вы ввели не совпадают!", "error");
  }

  // check if checkbox was clicked
  else if (!checkbox) {
    swal("Упс!", "Вы не приняли правила пользования сайтом teamsearch.ru!", "error");
  }
  else {
    // make post request to teamsearch api
    $.post(
      "../api/signup.php",
      { login: login, password: password, email: email },
      function (data) {
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
        } else if (data == "Too easy password") {
          swal("Упс!", "Кажется ваш пароль вход в базу самых простых! Советуем сделать его более оригинальнее!", "error");
        } else {
          swal("Упс!", "Кажется пользователь с таким логином уже существует", "error");
        }
      }
    );
  }
}
