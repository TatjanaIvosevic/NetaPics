<?php
$requestMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_ENCODED);

if ($requestMethod != "POST") {
    header("Location:index.php?m=1");
    exit();
}

if (empty($_POST['input']) OR !isset($_POST['protection'])) {
    header("Location:index.php?m=2");
    exit();
} else {

    require_once 'include/database.php';

    $database = new Database();
    $inputRaw = $database->quote($_POST['input']);
    $inputFiltered = '';
    $protection = $_POST['protection'];


    if ($protection == "yes") {
        $inputFiltered = htmlspecialchars($inputRaw);
    }


    $id_log = $database->insert("INSERT INTO xss (input,filtered_input) VALUES ('$inputRaw','$inputFiltered')");

    echo '<p><a href="index.php">Back to new entry</a></p>';
    echo '<p><a href="show_logs.php">Show logs</a></p>';
}





