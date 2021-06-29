<?php
  $db = new SQLite3("../database.db");

  $login = trim($_POST["login"]);
  $password = trim($_POST["password"]);
  $email = trim($_POST["email"]);

  $sql = "SELECT ROW_NUMBER() FROM user WHERE login=".$login;
  $result = $db->exec($sql);
  echo $result;
  if ($result == 0) {
    $sql = "INSERT INTO user (login, password, email) VALUES(`$login`, `$password`, `$email`)";
    $db->querySingle($sql);
    echo "Success";
  }
  else {
    echo "Already exists";
  }

  unset($db);
 ?>
