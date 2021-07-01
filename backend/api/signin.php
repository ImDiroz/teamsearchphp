<?php
include_once "./general_functionality/check_user_exists.php";
include_once "./general_functionality/get_user_data.php";

$connection = new SQLite3("../database.db");

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);

if (!check_if_user_exists_by_login_and_password($connection, $login, $password)) {
  echo "Invalid data";
} else {
  $token = get_user_data_by_login($connection, $login)["token"];
  session_start();
  $_COOKIE["token"] = $token;
  echo "Success";
}

unset($connection);
