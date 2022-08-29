<?php
session_start();
require_once 'db_config.php';
require_once 'functions_def.php';

if (isset($_POST['id'])) {
   $id = mysqli_real_escape_string($connection, $_POST['id']);
   $id_user = $_SESSION['id_user'];
   $sql = "DELETE FROM images WHERE id = '$id'";
   $query = mysqli_query($connection, $sql);

   $sql = "UPDATE users SET users.files_uploaded = users.files_uploaded - 1 WHERE users.id = '$id_user'";
   $query = mysqli_query($connection, $sql);

   redirection("profile.php");
}


