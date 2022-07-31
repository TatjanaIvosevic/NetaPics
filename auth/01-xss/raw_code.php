<?php
header("Content-Security-Policy: default-src 'self' https://code.jquery.com/ https://stackpath.bootstrapcdn.com/");
require_once 'include/functions.php';
$id = "";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}

if (!empty($id) AND dataExists($id, "xss", "id_xss", "id_xss")) {
    $input = getData(['input'], "xss", "id_xss", $id);
    echo $input[0]['input'];
}