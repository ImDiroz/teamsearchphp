<?php

/**
 * execute sql code (sqlite3)
 */
function sqlite3_exec($connection, $sql)
{
  $rs = $connection->prepare($sql);
  return $rs->execute();
}

/**
 * returns fetched array
 */
function sqlite3_exec_fetch_arr($connection, $sql)
{
  return sqlite3_exec($connection, $sql)->fetchArray();
}
