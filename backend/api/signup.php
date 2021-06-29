<?php
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
    $sql = "INSERT INTO user (login, password, email) VALUES(:login, :password, :email)";
    $rs = $connection->prepare($sql);
    $rs->bindValue(":login", $login, SQLITE3_TEXT);
    $rs->bindValue(":password", $login, SQLITE3_TEXT);
    $rs->bindValue(":email", $login, SQLITE3_TEXT);
    $rs->execute();
    echo "Success";
  }
  else {
    echo "Already exists";
    echo "Count: " . $count;
  }

  unset($connection);
 ?>
