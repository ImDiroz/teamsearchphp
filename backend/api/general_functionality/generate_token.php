<?php

/**
 * function that generates the new teamsearch user's 
 * token and than returns it
 */
function generateToken($length = 20) {
    $chars = ".,#@!?><%^&*()[]{}';/abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
