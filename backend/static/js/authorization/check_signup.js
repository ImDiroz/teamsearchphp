function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function Signup() {
  var login = $(".login input:text").val();
  var password = $(".password input:text").val();
  var password2 = $(".password2 input:text").val();
  var email = $(".email input:text").val();
  var checkbox = $(".checkbox").is(':checked');
  if (password != password2) {
    swal("Упс!", "Кажеться пароли которые вы ввели не совпадают!", "error");
  }
  else if (password.replaceAll(/\s/g,'') == "") {
    swal("Упс!", "Пароль не может быть пустым", "error");
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
