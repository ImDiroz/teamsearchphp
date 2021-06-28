<?php
  $db = new SQLite3("../database.db");

  $login = $_POST["login"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $sql = "SELECT * FROM user WHERE login=$login";
  $result = $db->querySingle($sql);
  if ($result == false) {
    $sql = "INSERT INTO user
    (login, password, email)
    VALUES($login, $password, $email)"
    echo "Success";
  }
  else {
    echo "Already exists";
  }

  unset($db);
 ?>
