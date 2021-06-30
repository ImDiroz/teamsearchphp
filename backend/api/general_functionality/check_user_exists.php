<?php

include_once __DIR__ . "/execute_sql.php";

/**
 * function that returns boolean if user exists 
 * with exact login in database
 */
function check_if_user_exists_by_login($connection, $user_login)
{
  $count = sqlite3_exec_fetch_arr(
    $connection,
    "SELECT COUNT(*) AS count FROM user WHERE login='$user_login'"
  )["count"];
  return $count != 0;
}

/**
 * function that returns boolean if user exists
 * with exact login and password hash
 */
function check_if_user_exists_by_login_and_password_hash(
  $connection,
  $user_login,
  $user_password_hash
) {
  $count = sqlite3_exec_fetch_arr(
    $connection,
    "SELECT COUNT(*) AS count FROM user WHERE login='$user_login' and password='$user_password_hash'"
  )["count"];
  return $count != 0;
}
/**
 * translates password to hash and executes previous function
 */
function check_if_user_exists_by_login_and_password(
  $connection,
  $user_login,
  $user_password
) {
  return check_if_user_exists_by_login_and_password_hash($connection, $user_login, md5($user_password));
}
