<?php
session_start();
require_once 'db_config.php';
require_once 'functions_def.php';
$sessionProvider = new EasyCSRF\NativeSessionProvider();
$easyCSRF = new EasyCSRF\EasyCSRF($sessionProvider);

if (isset($_POST['upload'])){
    try {
        $easyCSRF->check('my_token', $_POST['csrf']);
    } catch(Exception $e) {
        redirection('profile.php?r=12');
    }
    $img = $_FILES['img'];

    $imgTitle = $_POST['title'];
    $imgName = $_FILES['img']['name'];
    $imgTmpName = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];
    $imgError = $_FILES['img']['error'];
    $imgType = $_FILES['img']['type'];

    $imgExt = explode('.', $imgName);
    $imgActualExt = strtolower(end($imgExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($imgActualExt, $allowed)) {
        if ($imgError === 0) {
            if ($imgSize < 10000000) {
                $imgNameNew = uniqid('', true).".".$imgActualExt;
                $imgDestination = 'photos/'.$imgNameNew;
                move_uploaded_file($imgTmpName, $imgDestination);
                $date = date('Y-m-d');
                $id_user = $_SESSION['id_user'];
                //trenutno je hardkodovano u sql naredbi da se slika uvek uploaduje preko korisnika sa id 2. Treba da se uploaduje preko id ulogovanog usera.

                $sql = "INSERT INTO images (id_user, title, date_uploaded, image) VALUES ('$id_user', '$imgTitle', '$date', '$imgDestination')";
                if (!empty($connection)) {
                    mysqli_query($connection, $sql);
                    header("Location: profile.php?uploadsuccess");
                }

                $sql = "UPDATE users SET users.files_uploaded = users.files_uploaded + 1 WHERE users.id ='$id_user';";
                mysqli_query($connection, $sql);

            } else {
                echo "Slika može biti do 1GB veličine!";
            }

        } else {
            echo "Došlo je do greške prilikom otpremanja fotografije. Pokušaj ponovo.";
        }

    } else {
        echo "Dozvoljene ekstenzije za fotografiju su jpg, jpeg i png.";
    }
}


?>