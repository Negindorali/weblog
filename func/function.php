<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

function text_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

function EnglishOnly($string){
        return !preg_match("/^[a-zA-Z-' ]*$/", $string);
}