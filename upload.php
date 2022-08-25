<?php
include 'config.php';
include 'db_config.php';

if (isset($_POST['upload'])){
    $img = $_FILES['img'];

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
            if ($imgSize < 1000000) {
                $imgNameNew = uniqid('', true).".".$imgActualExt;
                $imgDestination = 'photos/'.$imgNameNew;
                move_uploaded_file($imgTmpName, $imgDestination);

                $sql = "INSERT INTO images (id_user, title, image) VALUES (1, 'slika', '$imgDestination')";
                if (!empty($connection)) {
                    mysqli_query($connection, $sql);
                    header("Location: profile.php?uploadsuccess");
                }

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