<?php

require "config.php";
require "db_config.php";
require "functions_def.php";

$code = "";

if (isset($_GET['token'])){
    $token = mysqli_real_escape_string($connection, trim($_GET['token']));
}
    
if (!empty($token) AND strlen($token) === 40) {
    $sql = "UPDATE users SET active='1', token='', registration_expires=''
            WHERE  binary token = '$token' AND registration_expires>now()";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_affected_rows($connection) > 0) {
       redirection('login.php?r=6');
    }
    else {
        redirection('login.php?r=11');
    }
}
else {
    redirection('login.php?r=0');
}