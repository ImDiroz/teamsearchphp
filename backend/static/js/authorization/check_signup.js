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

  $.post("../api/signup.php", {login: login, password: password, password2: password2, email: email});
}
