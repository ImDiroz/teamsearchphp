<?php
$connection = new SQLite3("../database.db");

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);

$sql = "SELECT COUNT(*) AS count FROM user WHERE login=:login AND password=:password";

$rs = $connection->prepare($sql);
$rs->bindValue(":login", $login, SQLITE3_TEXT);
$rs->bindValue(":password", md5($password), SQLITE3_TEXT);

$result = $rs->execute();
$count = $result->fetchArray()["count"];

if ($count == 0) {
  echo "Invalid data";
}
else {
  $sql = "SELECT token FROM user WHERE login=:login";
  $rs = $connection->prepare($sql);
  $rs->bindValue(":login", $login, SQLITE3_TEXT);
  $result = $rs->execute();
  $token = $result->fetchArray()["token"];
  session_start();
  $_SESSION["login"] = $login;
  $_SESSION["token"] = $token;
  echo "Success";
}

unset($connection);
