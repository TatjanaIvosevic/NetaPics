<?php
require_once 'db_config.php';
$email = mysqli_real_escape_string($connection, $_POST['email']);
$query = "SELECT id FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result)>0){
    $user = mysqli_fetch_assoc($result);
    $token = uniqid(md5(time())); //random token.
    $query = "UPDATE users SET code_password = '$token' WHERE id = {$user['id']}";
    if(mysqli_query($connection, $query)){
        $to = $email;
        $subject = "Link za resetovanje lozinke";
        $headers = "";
        $header = "From: WEBMASTER <webmaster@vts.su.ac.rs>\n";
        $header .= "X-Sender: webmaster@vts.su.ac.rs\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $header .= "X-Priority: 1\n";
        $header .= "Reply-To:support@vts.su.ac.rs\r\n";
        $header .= "Content-Type: text/html; charset=UTF-8\n";
        $message = "Klikni <a href='http://localhost/NetaPics/reset_password.php?token=$token'>ovde</a> kako bi resetovao/la lozinku.";
        mail($to,$subject,$message, $headers);
        header('Location: forgot_password.php');
    }
} else {
    header('Location: forgot_password.php');
}
