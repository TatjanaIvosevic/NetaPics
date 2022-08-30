<?php
session_start();

require_once "db_config.php";
require "functions_def.php";

$username = "";
$password = "";
$passwordConfirm = "";
$firstname = "";
$lastname = "";
$email = "";
$action = "";
$message = "";
$user_type = "";

$referer = $_SERVER['HTTP_REFERER'];
$action = mysqli_real_escape_string($connection, $_POST["action"]);
$sessionProvider = new EasyCSRF\NativeSessionProvider();
$easyCSRF = new EasyCSRF\EasyCSRF($sessionProvider);

if ($action != "" AND in_array($action, $actions)) {

    switch ($action) {
        case "login":
            try {
                $easyCSRF->check('my_token', $_POST['csrf']);
            } catch(Exception $e) {
                redirection('login.php?r=12');
            }
            $username = mysqli_real_escape_string($connection, trim($_POST["username"]));
            $password = mysqli_real_escape_string($connection, trim($_POST["password"]));

            if (!empty($username) AND !empty($password)) {
                $data = checkUserLogin($username, $password);
                if ($data AND is_int($data['id'])) {
                    $_SESSION['username'] = $username;
                    $_SESSION['id_user'] = $data['id'];
                    redirection('index.php');
                } else {
                    redirection('registration.php?l=1');
                }

            } else {
                redirection('registration.php?l=1');
            }
            break;


        case "register" :
            try {
               $easyCSRF->check('my_token', $_POST['csrf']);
            } catch(Exception $e) {
                redirection('registration.php?r=12');
            }
            if(isset($_POST['username'])) {
                $username = mysqli_real_escape_string($connection, trim($_POST["username"]));
            }

            if(isset($_POST['firstname'])) {
                $firstname = mysqli_real_escape_string($connection, trim($_POST["firstname"]));
            }

            if(isset($_POST['lastname'])) {
                $lastname = mysqli_real_escape_string($connection, trim($_POST["lastname"]));
            }

            if (isset($_POST['password'])) {
                $password = mysqli_real_escape_string($connection, trim($_POST["password"]));
            }

            if (isset($_POST['passwordConfirm'])) {
                $passwordConfirm = mysqli_real_escape_string($connection, trim($_POST["passwordConfirm"]));
            }

            if (isset($_POST['email'])) {
                 $email = mysqli_real_escape_string($connection, trim($_POST["email"]));
            }

            if (isset($_POST['message'])) {
                $message = mysqli_real_escape_string($connection, trim($_POST["message"]));
            }

            if (isset($_POST['user_type'])) {
                $user_type = mysqli_real_escape_string($connection, trim($_POST["user_type"]));
            }

            if (empty($username)) {
                redirection('registration.php?r=4');
            }

            if (empty($firstname)) {
                redirection('registration.php?r=4');
            }

            if (empty($lastname)) {
                redirection('registration.php?r=4');
            }

            if (empty($password) OR strlen($password) < 7) {
                redirection('registration.php?r=9');
            }

            if (empty($passwordConfirm) OR strlen($passwordConfirm) < 7) {
                redirection('registration.php?r=9');
            }

            if ($password !== $passwordConfirm) {
                redirection('registration.php?r=7');
            }

            if (empty($email) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                redirection('registration.php?r=8');
            }

            if (!existsUser($username, $email)) {
                $token = createCode(40);
                $id_user_web = registerUser($username, $password, $firstname, $lastname, $email, $token, $message, $user_type);
                if (sendData($username, $email, $token)) {
                    redirection("registration.php?r=3");
                } else {
                    addEmailFailure($id_user_web);
                    redirection("registration.php?r=10");
                }

            } else {
                redirection('registration.php?r=2');
            }

            break;

        case "forget" :
            // To do
            break;

        default:
            redirection('registration.php?l=0');
            break;
    }

} else {
    redirection('registration.php?l=0');
}
