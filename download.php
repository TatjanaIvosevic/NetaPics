<?php
session_start();
require_once 'db_config.php';
require_once 'functions_def.php';

if (!isset($_SESSION['id_user'])) {
    redirection("login.php");
}

$id = mysqli_real_escape_string($connection, $_GET['id']);
$sql = "SELECT * FROM images WHERE id = '$id'";
$query = mysqli_query($connection, $sql);
$result = mysqli_fetch_assoc($query);

$filename = $result['image'];
//Check the file exists or not
if(file_exists($filename)) {

//Define header information
    $id_user = $result['id_user'];
    $sql = "UPDATE users SET users.files_downloaded = users.files_downloaded + 1 WHERE users.id = '$id_user'";
    $query = mysqli_query($connection, $sql);
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: 0");
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
    header('Content-Length: ' . filesize($filename));
    header('Pragma: public');
    flush();
    readfile($filename);
} else {
    header('Location: index.php');
}
