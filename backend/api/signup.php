<?php

include_once "./general_functionality/check_user_exists.php";
include_once "./general_functionality/generate_token.php";
include_once "./general_functionality/execute_sql.php";
include_once "./check_password.php";
include_once "./general_functionality/generate_token.php";

// create new sqlite3 connection
$connection = new SQLite3("../database.db");

// get values from post
$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);

// check if user already exists
if (check_if_password_is_easy($password)) {
  echo "Too easy password";
} elseif (!check_if_user_exists_by_login($connection, $login)) {
  // making md5 hash
  $password = md5($password);

  // generate user's token
  $token = generateToken();

  // insert values into database
  sqlite3_exec(
    $connection,
    "INSERT INTO user (login, password, email, token) VALUES('$login', '$password', '$email', '$token')"
  );

  // create avatar png file
  copy("../static/images/profile/avatar.png", "../user-avatars/" . $login);

  // if user with the same login do not exists print success
  echo "Success";
} else {
  // print that user already exists
  echo "Already exists";

  /* (for debug) */
  // echo "Count: " . $count;
}

// delete $connection object
unset($connection);
