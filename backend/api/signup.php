<?php

function generateToken($length=20) {
    $chars = ".,#@!?><%^&*()[]{}';/abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

$connection = new SQLite3("../database.db");

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);

$sql = "SELECT COUNT(*) AS count FROM user WHERE login=:login";

$rs = $connection->prepare($sql);
$rs->bindValue(":login", $login, SQLITE3_TEXT);

$result = $rs->execute();
$count = $result->fetchArray()["count"];

if ($count == 0) {
  $sql = "INSERT INTO user (login, password, email, token) VALUES(:login, :password, :email, :token)";
  $rs = $connection->prepare($sql);
  $token = generateToken();
  $rs->bindValue(":login", $login, SQLITE3_TEXT);
  $rs->bindValue(":password", md5($password), SQLITE3_TEXT);
  $rs->bindValue(":email", $email, SQLITE3_TEXT);
  $rs->bindValue(":token", $token, SQLITE3_TEXT);
  $rs->execute();
  copy("../static/images/profile/avatar.png", "../user-avatars/".$login);
  echo "Success";
}
else {
  echo "Already exists";
  echo "Count: " . $count;
}


unset($connection);
