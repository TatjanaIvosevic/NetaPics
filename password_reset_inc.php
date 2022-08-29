<?php
require 'db_config.php';

if(!isset($_POST['token'])) {
    header('Location: index.php');
    exit;
}
    $token = mysqli_real_escape_string($connection, $_POST['token']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT * FROM users WHERE code_password = '$token'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_array($result);
        $email = $user['email'];
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = '$hashed', code_password = '' WHERE email = '$email'";
        $query = mysqli_query($connection, $sql);
        header("Location: login.php");
    }else {
        header("Location: index.php ");
        exit;
    }
