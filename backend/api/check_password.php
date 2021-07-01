<?php

function console_log($output, $with_script_tags = true)
{
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
    ');';
  if ($with_script_tags) {
    $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}

function check_if_password_is_easy($password)
{
  $file = fopen("../simple_passwords/simple_passwords.txt", "r");
  while ($simple_password = fgets($file)) {
    $simple_password = preg_replace("/\r|\n/", "", $simple_password);
    if ($password == $simple_password) return true;
  }
  return false;
}
