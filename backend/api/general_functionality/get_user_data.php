<?php

include_once __DIR__ . "/execute_sql.php";
/**
 * get all data about user from sqlite3 database by login in view of
 * dict (php array)
 */
function get_user_data_by_login($connection, $login)
{
  $result = sqlite3_exec_fetch_arr(
    $connection,
    "SELECT * FROM user WHERE login='$login'"
  );
  return $result;
}
