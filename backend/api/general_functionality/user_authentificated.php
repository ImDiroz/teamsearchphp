<?php

/**
 * function that checks if user logged in
 */
function check_if_user_was_logged_in()
{
  return isset($_SESSION["token"]);
}
