<?php
$connection = new SQLite3("../database.db");

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);

$sql = "SELECT COUNT(*) AS count FROM user WHERE login=:login AND password=:password";

$rs = $connection->prepare($sql);
$rs->bindValue(":login", $login, SQLITE3_TEXT);
$rs->bindValue(":password", $password, SQLITE3_TEXT);

$result = $rs->execute();
$count = $result->fetchArray()["count"];

if ($count == 0) {
  echo "Success";
}
else {
  echo "Already exists";
}

unset($connection);
